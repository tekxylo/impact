const fs = require('fs');
var mysql = require('mysql');

module.exports = {
	name: 'verify',
	description: 'Verify your discord account.',
	execute(message) {
		var con = mysql.createConnection({
			host: "localhost",
			user: "dirtbikes",
			password: "nbk8k6vn",
			database: "impact"
		});

		var userid = message.member.id;		
		var role = message.guild.roles.cache.find(role => role.name === "Verified");
		message.delete();

		con.connect(function(err) {
			if (err) {
				message.author.send(':x: A Connection Issue Occured!');
			}
			
			console.log('Connecting to Server...');
		});

		con.query("SELECT * FROM discord_connections WHERE discord_id = '" + userid + "'", function (err, result) {
			if (err) {
				message.author.send(':x: A Querry Issue Occured!');
			}

			try {
				if(result[0].discord_id == userid) {
					message.author.send(':white_check_mark: Your account has been verified');
					const member = message.member;
					member.roles.add(role);
				}
			} catch (e) {
				message.author.send(':x: Your account was not linked to Impact! Go check at https://impactatv.com/account/settings :');
			}

		});
	},
};