class MarkdownContent:

    def getTemplate(self):
        
        contentString = ""
        contentString += "# Result in Ubuntu from LG Gram 2018\n\n"
        contentString += "## Author\n\n"
        contentString += "Name: " + self.dataContent.getAuthorName() + "\n\n"
        contentString += "Email: " + self.dataContent.getAuthorMail() 
        contentString += "Linkedin: " + self.dataContent.getAuthorLinkedin() + "\n\n"
        contentString += "Github: " + self.dataContent.getAuthorGithub() + "\n\n"
        contentString += "Stackoverflow: " + self.dataContent.getAuthorStackOverflow() + "\n\n"
        contentString += "Meetup: " + self.dataContent.getAuhtorMeetUp() + "\n\n"
        contentString += "## System tested\n\n"

        return contentString
