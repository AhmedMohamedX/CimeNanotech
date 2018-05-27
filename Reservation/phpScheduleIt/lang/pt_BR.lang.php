<?php
/**
* Portuguese (pt_BR) translation file.
*  
* @author Nick Korbel <lqqkout13@users.sourceforge.net>
* @translator Thiago Moesch <tmoesch@terra.com.br>
* @translator Caliane Zschornack <caliane@conssoli.com.br>
* @version 05-14-06
* @package Languages
*
* Copyright (C) 2003 - 2007 phpScheduleIt
* License: GPL, see LICENSE
*/
///////////////////////////////////////////////////////////
// INSTRUCTIONS
///////////////////////////////////////////////////////////
// This file contains all of the strings that are used throughout phpScheduleit.
// Please save the translated file as '2 letter language code'.lang.php.  For example, en.lang.php.
// 
// To make phpScheduleIt available in another language, simply translate each
//  of the following strings into the appropriate one for the language.  If there
//  is no direct translation, please provide the closest translation.  Please be sure
//  to make the proper additions the /config/langs.php file (instructions are in the file).
//  Also, please add a help translation for your language using en.help.php as a base.
//
// You will probably keep all sprintf (%s) tags in their current place.  These tags
//  are there as a substitution placeholder.  Please check the output after translating
//  to be sure that the sentences make sense.
//
// + Please use single quotes ' around all $strings.  If you need to use the ' character, please enter it as \'
// + Please use double quotes " around all $email.  If you need to use the " character, please enter it as \"
//
// + For all $dates please use the PHP strftime() syntax
//    http://us2.php.net/manual/en/function.strftime.php
//
// + Non-intuitive parts of this file will be explained with comments.  If you
//    have any questions, please email lqqkout13@users.sourceforge.net
//    or post questions in the Developers forum on SourceForge
//    http://sourceforge.net/forum/forum.php?forum_id=331297
///////////////////////////////////////////////////////////

////////////////////////////////
/* Do not modify this section */
////////////////////////////////
global $strings;			  //
global $email;				  //
global $dates;				  //
global $charset;			  //
global $letters;			  //
global $days_full;			  //
global $days_abbr;			  //
global $days_two;			  //
global $days_letter;		  //
global $months_full;		  //
global $months_abbr;		  //
global $days_letter;		  //
/******************************/

// Charset for this language
// 'iso-8859-1' will work for most languages
$charset = 'iso-8859-1';

/***
  DAY NAMES
  All of these arrays MUST start with Sunday as the first element 
   and go through the seven day week, ending on Saturday
***/
// The full day name
$days_full = array('Domingo', 'Segunda', 'Ter�a', 'Quarta', 'Quinta', 'Sexta', 'S�bado');
// The three letter abbreviation
$days_abbr = array('Dom', 'Seg', 'Ter', 'Qua', 'Qui', 'Sex', 'S�b');
// The two letter abbreviation
$days_two  = array('Do', 'Se', 'Te', 'Qa', 'Qu', 'Sx', 'S�');
// The one letter abbreviation
$days_letter = array('D', 'S', 'T', 'Q', 'Q', 'S', 'S');

/***
  MONTH NAMES
  All of these arrays MUST start with January as the first element
   and go through the twelve months of the year, ending on December
***/
// The full month name
$months_full = array('Janeiro', 'Fevereiro', 'Mar�o', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro');
// The three letter month name
$months_abbr = array('Jan', 'Fev', 'Mar', 'Abr', 'Mai', 'Jun', 'Jul', 'Ago', 'Set', 'Out', 'Nov', 'Dez');

// All letters of the alphabet starting with A and ending with Z
$letters = array ('A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z');

/***
  DATE FORMATTING
  All of the date formatting must use the PHP strftime() syntax
  You can include any text/HTML formatting in the translation
***/
// General date formatting used for all date display unless otherwise noted
$dates['general_date'] = '%d/%m/%Y';
// General datetime formatting used for all datetime display unless otherwise noted
// The hour:minute:second will always follow this format
$dates['general_datetime'] = '%d/%m/%Y @';
// Date in the reservation notification popup and email
$dates['res_check'] = '%A %d/%m/%Y';
// Date on the scheduler that appears above the resource links
$dates['schedule_daily'] = '%A,<br/>%d/%m/%Y';
// Date on top-right of each page
$dates['header'] = '%A, %B %d, %Y';
// Jump box format on bottom of the schedule page
// This must only include %m %d %Y in the proper order,
//  other specifiers will be ignored and will corrupt the jump box 
$dates['jumpbox'] = '%d %m %Y';

/***
  STRING TRANSLATIONS
  All of these strings should be translated from the English value (right side of the equals sign) to the new language.
  - Please keep the keys (between the [] brackets) as they are.  The keys will not always be the same as the value.
  - Please keep the sprintf formatting (%s) placeholders where they are unless you are sure it needs to be moved.
  - Please keep the HTML and punctuation as-is unless you know that you want to change it.
***/
$strings['hours'] = 'horas';
$strings['minutes'] = 'minutos';
// The common abbreviation to hint that a user should enter the month as 2 digits
$strings['mm'] = 'mm';
// The common abbreviation to hint that a user should enter the day as 2 digits
$strings['dd'] = 'dd';
// The common abbreviation to hint that a user should enter the year as 4 digits
$strings['yyyy'] = 'yyyy';
$strings['am'] = 'am';
$strings['pm'] = 'pm';

$strings['Administrator'] = 'Administrador';
$strings['Welcome Back'] = 'Bem-vindo, %s';
$strings['Log Out'] = 'Sair';
$strings['My Control Panel'] = 'Meu Painel de Controle';
$strings['Help'] = 'Ajuda';
$strings['Manage Schedules'] = 'Gerenciar Agenda';
$strings['Manage Users'] = 'Gerenciar Usu�rios';
$strings['Manage Resources'] = 'Gerenciar Recursos';
$strings['Manage User Training'] = 'Gerenciar Treinamento ';
$strings['Manage Reservations'] = 'Gerenciar Reservas';
$strings['Email Users'] = 'Enviar E-mail';
$strings['Export Database Data'] = 'Exportar Dados';
$strings['Reset Password'] = 'Alterar Senha';
$strings['System Administration'] = 'Administrador do Sistema';
$strings['Successful update'] = 'A atualiza��o terminou com �xito';
$strings['Update failed!'] = 'Erro na atualiza��o';
$strings['Manage Blackout Times'] = 'Gerenciar Hor�rios Indispon�veis';
$strings['Forgot Password'] = 'Esqueceu a senha';
$strings['Manage My Email Contacts'] = 'Gerenciar meus contatos de E-mail';
$strings['Choose Date'] = 'Escolher Data';
$strings['Modify My Profile'] = 'Alterar Meus Dados';
$strings['Register'] = 'Registrar';
$strings['Processing Blackout'] = 'Processando hor�rios indispon�veis';
$strings['Processing Reservation'] = 'Processando Reserva';
$strings['Online Scheduler [Read-only Mode]'] = 'Agenda Online [Somente Leitura]';
$strings['Online Scheduler'] = 'Agenda Online';
$strings['phpScheduleIt Statistics'] = 'Estat�sticas da Agenda';
$strings['User Info'] = 'Informa��es do Usu�rios';

$strings['Could not determine tool'] = 'N�o foi poss�vel determinar a ferramenta. Por favor, volte ao Meu Painel de Controle e tente novamente mais tarde.';
$strings['This is only accessable to the administrator'] = 'Acesso permitido apenas ao administrador';
$strings['Back to My Control Panel'] = 'Voltar ao Meu Painel de Controle';
$strings['That schedule is not available.'] = 'Esta agenda n�o est� dispon�vel';
$strings['You did not select any schedules to delete.'] = 'Voc� n�o selecionou nenhum compromisso para excluir.';
$strings['You did not select any members to delete.'] = 'Voc� n�o selecionou nenhum membro para excluir.';
$strings['You did not select any resources to delete.'] = 'Voc� n�o selecionou nenhum recurso para excluir.';
$strings['Schedule title is required.'] = 'O t�tulo do compromisso � obrigat�rio.';
$strings['Invalid start/end times'] = 'Hor�rio de in�cio/fim � inv�lido';
$strings['View days is required'] = 'Dias de visualiza��o � obrigat�rio';
$strings['Day offset is required'] = 'Dura��o de dias � obrigat�rio';
$strings['Admin email is required'] = 'Email do Administrador � obrigat�rio';
$strings['Resource name is required.'] = 'Nome do recurso � obrigat�rio.';
$strings['Valid schedule must be selected'] = 'Um compromisso v�lido deve ser selecionado';
$strings['Minimum reservation length must be less than or equal to maximum reservation length.'] = 'A maior reserva deve ser maior ou igual � menor reserva.';
$strings['Your request was processed successfully.'] = 'Sua solicita��o foi processada com sucesso.';
$strings['Go back to system administration'] = 'Voltar para a administra��o do sistema';
$strings['Or wait to be automatically redirected there.'] = 'Ou espere para ser automaticamente direcionado para l�.';
$strings['There were problems processing your request.'] = 'Ocorreram problemas no processamento de sua solicita��o.';
$strings['Please go back and correct any errors.'] = 'Por favor, volte e corriga os erros.';
$strings['Login to view details and place reservations'] = 'Entre para ver os detalhes e fazer reservas';
$strings['Memberid is not available.'] = 'ID do Membro: %s n�o est� dispon�vel.';

$strings['Schedule Title'] = 'T�tulo do Compromisso';
$strings['Start Time'] = 'Hora de In�cio';
$strings['End Time'] = 'Hora de T�rmino';
$strings['Time Span'] = 'Agrupamento de Hor�rio';
$strings['Weekday Start'] = 'Dia inicial da semana';
$strings['Admin Email'] = 'E-mail do Admin';

$strings['Default'] = 'Padr�o';
$strings['Reset'] = 'Alterar';
$strings['Edit'] = 'Editar';
$strings['Delete'] = 'Excluir';
$strings['Cancel'] = 'Cancelar';
$strings['View'] = 'Visualizar';
$strings['Modify'] = 'Alterar';
$strings['Save'] = 'Salvar';
$strings['Back'] = 'Voltar';
$strings['Next'] = 'Pr�ximo';
$strings['Close Window'] = 'Fechar Janela';
$strings['Search'] = 'Busca';
$strings['Clear'] = 'Limpar';

$strings['Days to Show'] = 'Dias para exibir';
$strings['Reservation Offset'] = 'Dura��o da Reserva';
$strings['Hidden'] = 'Oculto';
$strings['Show Summary'] = 'Exibir Sum�rio';
$strings['Add Schedule'] = 'Adicionar Compromisso';
$strings['Edit Schedule'] = 'Editar Compromisso';
$strings['No'] = 'N�o';
$strings['Yes'] = 'Sim';
$strings['Name'] = 'Nome';
$strings['First Name'] = 'Primeiro Nome';
$strings['Last Name'] = 'Sobrenome';
$strings['Resource Name'] = 'Nome do Recurso';
$strings['Email'] = 'E-mail';
$strings['Institution'] = 'Instituti��o';
$strings['Phone'] = 'Fone';
$strings['Password'] = 'Senha';
$strings['Permissions'] = 'Permiss�es';
$strings['View information about'] = 'Ver informa��es sobre %s %s';
$strings['Send email to'] = 'Enviar e-mail para %s %s';
$strings['Reset password for'] = 'Alterar senha para %s %s';
$strings['Edit permissions for'] = 'Alterar permiss�es de %s %s';
$strings['Position'] = 'Posi��o';
$strings['Password (6 char min)'] = 'Senha (%s car�c. no m�nimo)';
$strings['Re-Enter Password'] = 'Re-digite a Senha';

$strings['Sort by descending last name'] = 'Ordenar sobrenome decrescente';
$strings['Sort by descending email address'] = 'Ordenar e-mail decrescente';
$strings['Sort by descending institution'] = 'Ordenar institui��o decrescente';
$strings['Sort by ascending last name'] = 'Ordenar sobrenome crescente';
$strings['Sort by ascending email address'] = 'Ordenar e-mail crescente';
$strings['Sort by ascending institution'] = 'Ordenar institui��o crescente';
$strings['Sort by descending resource name'] = 'Ordenar recurso decrescente';
$strings['Sort by descending location'] = 'Ordenar localiza��o decrescente';
$strings['Sort by descending schedule title'] = 'Ordenar t�tulo do compromisso decrescente';
$strings['Sort by ascending resource name'] = 'Ordenar recurso crescente';
$strings['Sort by ascending location'] = 'Ordenar localiza��o crescente';
$strings['Sort by ascending schedule title'] = 'Ordenar t�tulo do compromisso crescente';
$strings['Sort by descending date'] = 'Ordenar data decrescente';
$strings['Sort by descending user name'] = 'Ordenar usu�rio decrescente';
$strings['Sort by descending start time'] = 'Ordenar hora de in�cio decrescente';
$strings['Sort by descending end time'] = 'Ordenar hora de t�rmino decrescente';
$strings['Sort by ascending date'] = 'Ordenar data crescente';
$strings['Sort by ascending user name'] = 'Ordenar usu�rio crescente';
$strings['Sort by ascending start time'] = 'Ordenar hora de in�cio crescente';
$strings['Sort by ascending end time'] = 'Ordenar hora de t�rmino crescente';
$strings['Sort by descending created time'] = 'Ordenar por hora de cria��o decrescente';
$strings['Sort by ascending created time'] = 'Ordenar por hora de cria��o crescente';
$strings['Sort by descending last modified time'] = 'Ordenar por hora da �ltima modifica��o decrescente';
$strings['Sort by ascending last modified time'] = 'Ordenar por hora da �ltima modifica��o crescente';

$strings['Search Users'] = 'Procurar usu�rios';
$strings['Location'] = 'Localiza��o';
$strings['Schedule'] = 'Agenda';
$strings['Phone'] = 'Telefone';
$strings['Notes'] = 'Notas';
$strings['Status'] = 'Status';
$strings['All Schedules'] = 'Todas as agendas';
$strings['All Resources'] = 'Todos os recursos';
$strings['All Users'] = 'Todos os usu�rios';

$strings['Edit data for'] = 'Editar data para %s';
$strings['Active'] = 'Ativo';
$strings['Inactive'] = 'Inativo';
$strings['Toggle this resource active/inactive'] = 'Mudar este recurso para ativo/inativo';
$strings['Minimum Reservation Time'] = 'Tempo de reserva m�nimo';
$strings['Maximum Reservation Time'] = 'Tempo de reserva m�ximo';
$strings['Auto-assign permission'] = 'Auto-assinar permiss�o';
$strings['Add Resource'] = 'Adicionar recurso';
$strings['Edit Resource'] = 'Editar recurso';
$strings['Allowed'] = 'Autorizado';
$strings['Notify user'] = 'Notificar usu�rio';
$strings['User Reservations'] = 'Reservas do usu�rio';
$strings['Date'] = 'Data';
$strings['User'] = 'Usu�rio';
$strings['Email Users'] = 'Enviar e-mail para usu�rios';
$strings['Subject'] = 'Assunto';
$strings['Message'] = 'Menssagem';
$strings['Please select users'] = 'Favor selecionar usu�rios';
$strings['Send Email'] = 'Enviar e-mail';
$strings['problem sending email'] = 'Desculpe, houve um problema no envio do seu e-mail. Favor tentar novamente.';
$strings['The email sent successfully.'] = 'O e-mail foi enviado com sucesso.';
$strings['do not refresh page'] = 'Favor <u>n�o</u> atualizar esta p�gina. Fazer isso enviar� o e-mail novamente.';
$strings['Return to email management'] = 'Voltar ao gerenciamento de e-mail';
$strings['Please select which tables and fields to export'] = 'Favor selecionar as tabelas e campos para exportar:';
$strings['all fields'] = '- todos os campos -';
$strings['HTML'] = 'HTML';
$strings['Plain text'] = 'Texto puro (plain text)';
$strings['XML'] = 'XML';
$strings['CSV'] = 'CSV';
$strings['Export Data'] = 'Exportar dados';
$strings['Reset Password for'] = 'Resetar Senha para %s';
$strings['Please edit your profile'] = 'Favor editar o seu perfil';
$strings['Please register'] = 'Favor registrar-ser';
$strings['Email address (this will be your login)'] = 'E-mail (este ser� o seu login)';
$strings['Keep me logged in'] = 'Manter-me logado <br/>(requer cookies)';
$strings['Edit Profile'] = 'Editar perfil';
$strings['Register'] = 'Registrar';
$strings['Please Log In'] = 'Favor logar';
$strings['Email address'] = 'Endere�o de e-mail';
$strings['Password'] = 'Senha';
$strings['First time user'] = 'Novo usu�rio?';
$strings['Click here to register'] = 'Clique aqui para se registrar';
$strings['Register for phpScheduleIt'] = 'Registrar para o PhpScheduleIt';
$strings['Log In'] = 'Logar';
$strings['View Schedule'] = 'Ver agenda';
$strings['View a read-only version of the schedule'] = 'Ver uma vers�o de somente leitura da agenda';
$strings['I Forgot My Password'] = 'Esqueci minha senha!';
$strings['Retreive lost password'] = 'Recuperar senha perdida';
$strings['Get online help'] = 'Ajuda on-line';
$strings['Language'] = 'Linguagem';
$strings['(Default)'] = '(Padr�o)';

$strings['My Announcements'] = 'Meus an�ncios';
$strings['My Reservations'] = 'Minhas reservas';
$strings['My Permissions'] = 'Minhas permiss�es';
$strings['My Quick Links'] = 'Meus links';
$strings['Announcements as of'] = 'An�ncios at� %s';
$strings['There are no announcements.'] = 'N�o h� an�ncios.';
$strings['Resource'] = 'Recurso';
$strings['Created'] = 'Criado';
$strings['Last Modified'] = '�ltima modifica��o';
$strings['View this reservation'] = 'Ver esta reserva';
$strings['Modify this reservation'] = 'Modificar esta reserva';
$strings['Delete this reservation'] = 'Apagar esta reserva';
$strings['Bookings'] = 'Reservas';											// @since 1.2.0
$strings['Change My Profile Information/Password'] = 'Editar Perfil';		// @since 1.2.0
$strings['Manage My Email Preferences'] = 'Prefer�ncias de Email';				// @since 1.2.0
$strings['Mass Email Users'] = 'Enviar e-mail em massa para os usu�rios';
$strings['Search Scheduled Resource Usage'] = 'Procurar o uso de agendamento de recursos';
$strings['Search Scheduled Resource Usage'] = 'Pesquisa de Reserva';		// @since 1.2.0
$strings['View System Stats'] = 'Ver estat�sticas do sistema';
$strings['Email Administrator'] = 'Enviar e-mail para o Administrador';

$strings['Email me when'] = 'Enviar-me e-mail quando:';
$strings['I place a reservation'] = 'Eu fizer uma reserva';
$strings['My reservation is modified'] = 'Minha reserva for modificada';
$strings['My reservation is deleted'] = 'Minha reserva for apagada';
$strings['I prefer'] = 'Eu prefiro:';
$strings['Your email preferences were successfully saved'] = 'Suas prefer�ncias de e-mail foram salvas com sucesso!';
$strings['Return to My Control Panel'] = 'Retornar ao Meu Painel de Controle';

$strings['Please select the starting and ending times'] = 'Favor selecionar a hora inicial e final:';
$strings['Please change the starting and ending times'] = 'Favor modificar a hora inicial e final:';
$strings['Reserved time'] = 'Hor�rio reservado:';
$strings['Minimum Reservation Length'] = 'Dura��o m�nima da reserva:';
$strings['Maximum Reservation Length'] = 'Dura��o m�xima da reserva:';
$strings['Reserved for'] = 'Reservado para:';
$strings['Will be reserved for'] = 'Ser� reservado para:';
$strings['N/A'] = 'N/A';
$strings['Update all recurring records in group'] = 'Atualizar todos os registros no grupo?';
$strings['Delete?'] = 'Apagar?';
$strings['Never'] = '-- Nunca --';
$strings['Days'] = 'Dias';
$strings['Weeks'] = 'Semanas';
$strings['Months (date)'] = 'Meses (data)';
$strings['Months (day)'] = 'Meses (dia)';
$strings['First Days'] = 'Primeiro dia';
$strings['Second Days'] = 'Segundo dia';
$strings['Third Days'] = 'Terceiro dia';
$strings['Fourth Days'] = 'Quarto dia';
$strings['Last Days'] = '�ltimo dia';
$strings['Repeat every'] = 'Repetir todo:';
$strings['Repeat on'] = 'Repetir em:';
$strings['Repeat until date'] = 'Repetir at� a data:';
$strings['Choose Date'] = 'Escolher data';
$strings['Summary'] = 'Resumo';

$strings['View schedule'] = 'Ver agenda:';
$strings['My Reservations'] = 'Minhas reservas';
$strings['My Past Reservations'] = 'Minhas reservas antigas';
$strings['Other Reservations'] = 'Outras reservas';
$strings['Other Past Reservations'] = 'Outras reservas antigas';
$strings['Blacked Out Time'] = 'Hor�rio apagado';
$strings['Set blackout times'] = 'Alocar hor�rio apagado para %s para %s'; 
$strings['Reserve on'] = 'Reservar %s para %s';
$strings['Prev Week'] = '&laquo; Semana Anterior';
$strings['Jump 1 week back'] = 'Voltar 1 semana';
$strings['Prev days'] = '&#8249; �ltimos %d dias';
$strings['Previous days'] = '&#8249; �ltimos %d dias';
$strings['This Week'] = 'Esta semana';
$strings['Jump to this week'] = 'Pular para esta semana';
$strings['Next days'] = 'Pr�ximos %d dias &#8250;';
$strings['Next Week'] = 'Pr�xima semana &raquo;';
$strings['Jump To Date'] = 'Pular para a data';
$strings['View Monthly Calendar'] = 'Ver calend�rio mensal';
$strings['Open up a navigational calendar'] = 'Abrir um calend�rio para navega��o';

$strings['View stats for schedule'] = 'Ver estat�sticas para agenda:';
$strings['At A Glance'] = 'Vis�o r�pida';
$strings['Total Users'] = 'Total de usu�rios:';
$strings['Total Resources'] = 'Total de recursos:';
$strings['Total Reservations'] = 'Total de reservas:';
$strings['Max Reservation'] = 'Reserva m�xima:';
$strings['Min Reservation'] = 'Reserva m�nima:';
$strings['Avg Reservation'] = 'M�dia de reservas:';
$strings['Most Active Resource'] = 'Recurso mais ativo:';
$strings['Most Active User'] = 'Usu�rio mais ativo:';
$strings['System Stats'] = 'Estat�sticas do sistema';
$strings['phpScheduleIt version'] = 'Vers�o do phpScheduleIt:';
$strings['Database backend'] = 'Backend do Banco de Dados:';
$strings['Database name'] = 'Nome da base de dados:';
$strings['PHP version'] = 'Vers�o do PHP:';
$strings['Server OS'] = 'Server OS:';
$strings['Server name'] = 'Nome do servidor:';
$strings['phpScheduleIt root directory'] = 'Diret�rio raiz do phpScheduleIt:';
$strings['Using permissions'] = 'Usando permiss�es:';
$strings['Using logging'] = 'Using logging:';
$strings['Log file'] = 'Arquivo de Log:';
$strings['Admin email address'] = 'Endere�o de email do Admin:';
$strings['Tech email address'] = 'Endere�o de email do Tech:';
$strings['CC email addresses'] = 'Endere�o de email do CC:';
$strings['Reservation start time'] = 'Hor�rio de in�cio da reserva:';
$strings['Reservation end time'] = 'Hor�rio de t�rmino da reserva:';
$strings['Days shown at a time'] = 'Dias mostrados por vez:';
$strings['Reservations'] = 'Reservas';
$strings['Return to top'] = 'Voltar ao topo';
$strings['for'] = 'para';

$strings['Select Search Criteria'] = 'Selecionar crit�rio de busca';
$strings['Schedules'] = 'Agendas:';
$strings['All Schedules'] = 'Todas os agendamentos';
$strings['Hold CTRL to select multiple'] = 'Pressione CTRL para selecionar mais de um';
$strings['Users'] = 'Usu�rios:';
$strings['All Users'] = 'Todos os usu�rios';
$strings['Resources'] = 'Recursos';
$strings['All Resources'] = 'Todos os recursos';
$strings['Starting Date'] = 'Data inicial:';
$strings['Ending Date'] = 'Data final:';
$strings['Starting Time'] = 'Hor�rio inicial:';
$strings['Ending Time'] = 'Hor�rio final:';
$strings['Output Type'] = 'Sa�da:';
$strings['Manage'] = 'Gerenciar';
$strings['Total Time'] = 'Tempo total';
$strings['Total hours'] = 'Total de horas:';
$strings['% of total resource time'] = '% do tempo total de recursos';
$strings['View these results as'] = 'Ver os resultados como:';
$strings['Edit this reservation'] = 'Editar esta reserva';
$strings['Search Results'] = 'Procurar resultados';
$strings['Search Resource Usage'] = 'Procurar uso de recursos';
$strings['Search Results found'] = 'Procurar resultados: %d reservas encontradas';
$strings['Try a different search'] = 'Tente uma busca diferente';
$strings['Search Run On'] = 'Procurar em:';
$strings['Member ID'] = 'ID do usu�rio';
$strings['Previous User'] = '&laquo; Usu�rio anterior';
$strings['Next User'] = 'Pr�ximo usu�rio &raquo;';

$strings['No results'] = 'Sem resultados';
$strings['That record could not be found.'] = 'Este registro n�o foi encontrado.';
$strings['This blackout is not recurring.'] = 'Este apagamento n�o � recorrente.';
$strings['This reservation is not recurring.'] = 'Esta reserva n�o � recorrente.';
$strings['There are no records in the table.'] = 'N�o h� registros na tabela %s.';
$strings['You do not have any reservations scheduled.'] = 'Voc� n�o possui nenhuma reserva agendada.';
$strings['You do not have permission to use any resources.'] = 'Voc� n�o possui permiss�es para usar nenhum recurso.';
$strings['No resources in the database.'] = 'Nenhum recurso no banco de dados.';
$strings['There was an error executing your query'] = 'Houve um erro executando sua a��o:';

$strings['That cookie seems to be invalid'] = 'Este cookie parece ser inv�lido';
$strings['We could not find that logon in our database.'] = 'Este login n�o foi encontrado no banco de dados.';	// @since 1.1.0
$strings['That password did not match the one in our database.'] = 'A senha n�o confere com a que est� no banco de dados.';
$strings['You can try'] = '<br />Voc� pode tentar:<br />Registrar um e-mail.<br />Or:<br />Tente logar novamente.';
$strings['A new user has been added'] = 'Um novo usu�rio foi adicionado';
$strings['You have successfully registered'] = 'Seu registro foi bem-sucedido!';
$strings['Continue'] = 'Continuar...';
$strings['Your profile has been successfully updated!'] = 'Seu perfil foi atualizado com sucesso!';
$strings['Please return to My Control Panel'] = 'Favor retornar ao Meu Painel de Controle';
$strings['Valid email address is required.'] = '- � necess�rio um E-mail v�lido.';
$strings['First name is required.'] = '- � necess�rio o primeiro nome.';
$strings['Last name is required.'] = '- � necess�rio o sobrenome.';
$strings['Phone number is required.'] = '- � necess�rio um n�mero de telefone.';
$strings['That email is taken already.'] = '- E-mail j� existente..<br />Tente novamente com um e-mail diferente.';
$strings['Min 6 character password is required.'] = '- � necess�ria uma senha com no m�nimo %s caracteres.';
$strings['Passwords do not match.'] = '- As senhas n�o s�o iguais.';

$strings['Per page'] = 'Por p�gina:';
$strings['Page'] = 'P�gina:';

$strings['Your reservation was successfully created'] = 'Sua reserva foi criada com sucesso';
$strings['Your reservation was successfully modified'] = 'Sua reserva foi modificada com sucesso';
$strings['Your reservation was successfully deleted'] = 'Sua reserva foi apagada com sucesso';
$strings['Your blackout was successfully created'] = 'Seu apagamento foi criado com sucesso';
$strings['Your blackout was successfully modified'] = 'Seu apagamento foi modificado com sucesso';
$strings['Your blackout was successfully deleted'] = 'Seu apagamento foi apagado com sucesso';
$strings['for the follwing dates'] = 'para as datas seguintes:';
$strings['Start time must be less than end time'] = 'Hor�rio inicial deve ser menor do que o final.';
$strings['Current start time is'] = 'Hor�rio inicial corrente �:';
$strings['Current end time is'] = 'Hor�rio final corrente �:';
$strings['Reservation length does not fall within this resource\'s allowed length.'] = 'Dura��o da reserva n�o � permitida para este recurso.';
$strings['Your reservation is'] = 'Sua reserva �:';
$strings['Minimum reservation length'] = 'Dura��o m�nima da reserva:';
$strings['Maximum reservation length'] = 'Dura��o m�xima da reserva:';
$strings['You do not have permission to use this resource.'] = 'Voc� n�o possui permiss�o para utilizar este recurso.';
$strings['reserved or unavailable'] = '%s para %s est� reservado ou indispon�vel.';		// @since 1.1.0
$strings['Reservation created for'] = 'Reserva criada para %s';
$strings['Reservation modified for'] = 'Reserva modificada para %s';
$strings['Reservation deleted for'] = 'Reserva apagada para %s';
$strings['created'] = 'criado';
$strings['modified'] = 'modificado';
$strings['deleted'] = 'apagado';
$strings['Reservation #'] = 'Reserva #';
$strings['Contact'] = 'Contato';
$strings['Reservation created'] = 'Reserva criada';
$strings['Reservation modified'] = 'Reserva modificada';
$strings['Reservation deleted'] = 'Reserva apagada';

$strings['Reservations by month'] = 'Reservas por m�s';
$strings['Reservations by day of the week'] = 'Reservas por dia da semana';
$strings['Reservations per month'] = 'Reservas do m�s';
$strings['Reservations per user'] = 'Reservas por usu�rio';
$strings['Reservations per resource'] = 'Reservas do recurso';
$strings['Reservations per start time'] = 'Reservas por hor�rio inicial';
$strings['Reservations per end time'] = 'Reservas por hor�rio final';
$strings['[All Reservations]'] = '[Todas as reservas]';

$strings['Permissions Updated'] = 'Permiss�es atualizadas';
$strings['Your permissions have been updated'] = 'Suas %s permiss�es foram atualizadas';
$strings['You now do not have permission to use any resources.'] = 'Voc� n�o possui permiss�o para utilizar nenhum recurso.';
$strings['You now have permission to use the following resources'] = 'Voc� agora possui permiss�o para utilizar os seguintes recursos:';
$strings['Please contact with any questions.'] = 'Favor contatar %s com quaisquer perguntas.';
$strings['Password Reset'] = 'Resetar senha';

$strings['This will change your password to a new, randomly generated one.'] = 'Isto ir� criar uma nova senha, gerada aleatoriamente.';
$strings['your new password will be set'] = 'Ap�s entrar com seu e-mail e clicar "Alterar senha", sua nova senha ser� alterada no sistema e enviada por e-mail para voc�.';
$strings['Change Password'] = 'Alterar senha';
$strings['Sorry, we could not find that user in the database.'] = 'Desculpe, o usu�rio especificado n�o foi localizado.';
$strings['Your New Password'] = 'Sua nova %s senha';
$strings['Your new passsword has been emailed to you.'] = 'Sucesso!<br />'
    			. 'Sua nova senha foi enviada para o seu e-mail.<br />'
    			. 'Favor verificar seu e-mail para a sua nova senha, depois <a href="index.php">fa�a o login</a>'
    			. ' com esta nova senha e mude-a em seguida clicando na op��o &quot;Alterar meu perfil / senha&quot;'
    			. ' no Meu Painel de Controle.';

$strings['You are not logged in!'] = 'Voc� n�o est� logado!';

$strings['Setup'] = 'Configurar';
$strings['Please log into your database'] = 'Favor logar no banco de dados';
$strings['Enter database root username'] = 'Entrar com o nome do usu�rio do banco de dados:';
$strings['Enter database root password'] = 'Entrar com a senha do usu�rio do banco de dados:';
$strings['Login to database'] = 'Logar no banco de dados';
$strings['Root user is not required. Any database user who has permission to create tables is acceptable.'] = 'Superusu�rio <b>n�o</b> � necess�rio. Qualquer usu�rio do banco de dados que possua permiss�es para criar tabelas � aceit�vel.';
$strings['This will set up all the necessary databases and tables for phpScheduleIt.'] = 'Isto ir� configurar todos as bases de dados e tabelas necess�rias para o phpScheduleIt.';
$strings['It also populates any required tables.'] = 'Tamb�m ir� popular qualquer tabela necess�ria.';
$strings['Warning: THIS WILL ERASE ALL DATA IN PREVIOUS phpScheduleIt DATABASES!'] = 'Aviso: ISTO IR� APAGAR TODOS OS DADOS NA BASE DE DADOS ANTERIOR DO phpScheduleIt!';
$strings['Not a valid database type in the config.php file.'] = 'Tipo de banco de dados inv�lido no arquivo config.php.';
$strings['Database user password is not set in the config.php file.'] = 'Senha de usu�rio de banco de dados inv�lida no arquivo config.php.';
$strings['Database name not set in the config.php file.'] = 'Nome da base de dados inv�lida no arquivo config.php.';
$strings['Successfully connected as'] = 'Conectado com sucesso como';
$strings['Create tables'] = 'Criar tabelas &gt;';
$strings['There were errors during the install.'] = 'Houve erros durante a instala��o. � poss�vel que o phpScheduleIt continue funcionando se os erros forem menores.<br/><br/>'
	. 'Favor enviar qualque pergunta para os f�runs em <a href="http://sourceforge.net/forum/?group_id=95547">SourceForge</a>.';
$strings['You have successfully finished setting up phpScheduleIt and are ready to begin using it.'] = 'Voc� terminou com sucesso de configurar o phpScheduleIt e est� pronto para utiliz�-lo.';
$strings['Thank you for using phpScheduleIt'] = 'Apague completamente o diret�rio \'install\'.'
	. ' Isto � cr�tico porque cont�m todas as senhas dos bancos de dados e outras informa��es sensitivas.'
	. ' Caso contr�rio, voc� estar� deixando as portas abertas para qualquer um invadir seu sistema!'
	. '<br /><br />'
	. 'Obrigado por utilizar o phpScheduleIt!';
$strings['This will update your version of phpScheduleIt from 0.9.3 to 1.0.0.'] = 'Isto ir� atualizar sua vers�o do phpScheduleIt de 0.9.3 para 1.0.0.';
$strings['There is no way to undo this action'] = 'N�o h� possibilidade de desfazer esta a��o!';
$strings['Click to proceed'] = 'Clique para prosseguir';
$strings['This version has already been upgraded to 1.0.0.'] = 'Esta vers�o j� foi atualizada para 1.0.0.';
$strings['Please delete this file.'] = 'Por favor, apague este arquivo.';
$strings['Successful update'] = 'A atualiza��o foi conclu�da com sucesso';
$strings['Patch completed successfully'] = 'Patch completed successfully';////////traduzir
$strings['This will populate the required fields for phpScheduleIt 1.0.0 and patch a data bug in 0.9.9.'] = 'Isto ir� preencher os campos necess�rios para a vers�o 1.0.0 do phpScheduleIt e um bug de dados na vers�o 0.9.9.'
		. '<br />� necess�rio executar somente se voc� estiver efetuando uma atualiza��o do manual SQL da vers�o 0.9.9';

// @since 1.0.0 RC1
$strings['If no value is specified, the default password set in the config file will be used.'] = 'Se nenhum valor for especificado, ser� utilizado o padr�o de senha especificado no arquivo de configura��o.';
$strings['Notify user that password has been changed?'] = 'Notificar o usu�rio de que a senha foi alterada?';

// @since 1.1.0
$strings['This system requires that you have an email address.'] = 'Este sistema precisa que voc� tenha um endere�o de email.';
$strings['Invalid User Name/Password.'] = 'Usu�rio/Senha inv�lido.';
$strings['Pending User Reservations'] = 'Reservas pendentes de usu�rio';
$strings['Approve'] = 'Aprovar';
$strings['Approve this reservation'] = 'Aprovar esta reserva';
$strings['Approve Reservations'] ='Aprovar Reservas';

$strings['Announcement'] = 'An�ncios';
$strings['Number'] = 'N�mero';
$strings['Add Announcement'] = 'Adicionar An�ncio';
$strings['Edit Announcement'] = 'Editar An�ncio';
$strings['All Announcements'] = 'Todos os An�ncios';
$strings['Delete Announcements'] = 'Apagar An�ncios';
$strings['Use start date/time?'] = 'Usar data/hora de in�cio?';
$strings['Use end date/time?'] = 'Usar data/hora de t�rmino?';
$strings['Announcement text is required.'] = 'Texto do an�ncio � obrigat�rio.';
$strings['Announcement number is required.'] = 'N�mero do an�ncio � obrigat�rio.';

$strings['Pending Approval'] = 'Aprova��o pendente';
$strings['My reservation is approved'] = 'Minha reserva est� aprovada';
$strings['This reservation must be approved by the administrator.'] = 'Esta reserva deve ser aprovada pelo administrador.';
$strings['Approval Required'] = 'Aprova��o obrigat�ria';
$strings['No reservations requiring approval'] = 'Nenhuma aprova��o obrigat�ria de reserva ';
$strings['Your reservation was successfully approved'] = 'Sua reserva foi aprovada com sucesso';
$strings['Reservation approved for'] = 'Reserva aprovada para %s';
$strings['approved'] = 'aprovado';
$strings['Reservation approved'] = 'Reserva aprovada';

$strings['Valid username is required'] = 'Nome v�lido de usu�rio � obrigat�rio';
$strings['That logon name is taken already.'] = 'Este nome de logon j� existe..';
$strings['this will be your login'] = '(este ser� seu login)';
$strings['Logon name'] = 'Nome de logon';
$strings['Your logon name is'] = 'Seu nome de logon � %s';

$strings['Start'] = 'Iniciar';
$strings['End'] = 'Terminar';
$strings['Start date must be less than or equal to end date'] = 'Data de in�cio deve ser menor ou igual � data de t�rmino';
$strings['That starting date has already passed'] = 'Esta data de in�cio j� passou.';
$strings['Basic'] = 'B�sico';
$strings['Participants'] = 'Participantes';
$strings['Close'] = 'Fechar';
$strings['Start Date'] = 'Data de in�cio';
$strings['End Date'] = 'Data de t�rmino';
$strings['Minimum'] = 'M�nimo';
$strings['Maximum'] = 'M�ximo';
$strings['Allow Multiple Day Reservations'] = 'Permite reservas de m�ltiplos dias';
$strings['Invited Users'] = 'Usu�rios convidados';
$strings['Invite Users'] = 'Convidar usu�rios';
$strings['Remove Participants'] = 'Remover participantes';
$strings['Reservation Invitation'] = 'Convite de Reserva';
$strings['Manage Invites'] = 'Gerenciar Convites';
$strings['No invite was selected'] = 'Nenhum convite foi selecionado';
$strings['reservation accepted'] = '%s Aceitou seu convite no %s';
$strings['reservation declined'] = '%s Recusou seu convite no %s';
$strings['Login to manage all of your invitiations'] = 'Efetue login para gerenciar todos os seus convites';
$strings['Reservation Participation Change'] = 'Alterar Participa��o em Reserva';
$strings['My Invitations'] = 'Meus Convites';
$strings['Accept'] = 'Aceitar';
$strings['Decline'] = 'Recusar';
$strings['Accept or decline this reservation'] = 'Aceitar ou recusar esta reserva';
$strings['My Reservation Participation'] = 'Minha Participa��o em Reserva';
$strings['End Participation'] = 'Finalizar Participa��o';
$strings['Owner'] = 'Dono/Propriet�rio';
$strings['Particpating Users'] = 'Usu�rios Participantes';$strings['No advanced options available'] = 'Nenhuma op��o avan�ada dispon�vel';
$strings['Confirm reservation participation'] = 'Confirmar participa��o em reserva';
$strings['Confirm'] = 'Confirmar';
$strings['Do for all reservations in the group?'] = 'Fazer todas as reservas no grupo?';

$strings['My Calendar'] = 'Meu calend�rio';
$strings['View My Calendar'] = 'Visualizar Meu Calend�rio';
$strings['Participant'] = 'Participante';
$strings['Recurring'] = 'Recorrentes';
$strings['Multiple Day'] = 'M�ltiplos Dias';
$strings['[today]'] = '[hoje]';
$strings['Day View'] = 'Visualizar Dia';
$strings['Week View'] = 'Visualizar Semana';
$strings['Month View'] = 'Visualizar M�s';
$strings['Resource Calendar'] = 'Calend�rio de Recursos';
$strings['View Resource Calendar'] = 'Ver Calend�rio de Recursos';	// @since 1.2.0
$strings['Signup View'] = 'Visualizar Signup';

$strings['Select User'] = 'Selecionar Usu�rios';
$strings['Change'] = 'Alterar';

$strings['Update'] = 'Atualizar';
$strings['phpScheduleIt Update is only available for versions 1.0.0 or later'] = 'Atualiza��o do phpScheduleIt est� dispon�vel somente para as vers�es 1.0.0 ou posteriores';
$strings['phpScheduleIt is already up to date'] = 'phpScheduleIt j� est� atualizado';
$strings['Migrating reservations'] = 'Migrando reservas';

$strings['Admin'] = 'Admin';
$strings['Manage Announcements'] = 'Gerenciar An�ncios';
$strings['There are no announcements'] = 'N�o h� an�ncios';
// end since 1.1.0

// @since 1.2.0
$strings['Maximum Participant Capacity'] = 'Capacidade M�xima de Participantes';
$strings['Leave blank for unlimited'] = 'Deixe em branco para ilimitado';
$strings['Maximum of participants'] = 'Este recurso tem capacidade m�nima de %s participantes';
$strings['That reservation is at full capacity.'] = 'Esta reserva est� na capacidade m�xima.';
$strings['Allow registered users to join?'] = 'Permitir que usu�rios registrados participem?';
$strings['Allow non-registered users to join?'] = 'Permitir que usu�rios n�o registrados participem?';
$strings['Join'] = 'Participar';
$strings['My Participation Options'] = 'Minhas Op��es de Participa��o';
$strings['Join Reservation'] = 'Participar de Reserva';
$strings['Join All Recurring'] = 'Participar de Todos os Recorrentes';
$strings['You are not participating on the following reservation dates because they are at full capacity.'] = 'Voc� n�o est� participando das seguintes datas de reserva porque elas est�o com capacidade m�xima.';
$strings['You are already invited to this reservation. Please follow participation instructions previously sent to your email.'] = 'Voc� j� foi convidado para esta reserva. Por favor siga as instru��es de participa��o enviadas anteriormente para o seu email.';
$strings['Additional Tools'] = 'Ferramentas Adicionais';
$strings['Create User'] = 'Criar Usu�rio';
$strings['Check Availability'] = 'Verificar Disponibilidade';
$strings['Manage Additional Resources'] = 'Gerenciar Recursos Adicionais';
$strings['All Additional Resources'] = 'Todos os Recursos Adicionais';
$strings['Number Available'] = 'N�mero Dispon�vel';
$strings['Unlimited'] = 'Ilimitado';
$strings['Add Additional Resource'] = 'Adicionar Recursos Adicionais';
$strings['Edit Additional Resource'] = 'Editar Recursos Adicionais';
$strings['Checking'] = 'Checando';
$strings['You did not select anything to delete.'] = 'Voc� n�o selecionou nada para apagar.';
$strings['Added Resources'] = 'Recursos Adicionados';
$strings['Additional resource is reserved'] = 'O recurso adicional %s tem somente %s dispon�veis no momento';
$strings['All Groups'] = 'Todos os Grupos';
$strings['Group Name'] = 'Nome do Grupo';
$strings['Delete Groups'] = 'Apagar Grupos';
$strings['Manage Groups'] = 'Gerenciar Grupos';
$strings['None'] = 'Nenhum';
$strings['Group name is required.'] = 'Nome do grupo � obrigat�rio.';
$strings['Groups'] = 'Grupos';
$strings['Current Groups'] = 'Grupo Atual';
$strings['Group Administration'] = 'Grupo Administrativo';
$strings['Reminder Subject'] = 'Lembrete de Reservas- %s, %s %s';
$strings['Reminder'] = 'Lembrete';
$strings['before reservation'] = 'Antes da reserva';
$strings['My Participation'] = 'Minha Participa��o';
$strings['My Past Participation'] = 'Minha Participa��o Passada';
$strings['Timezone'] = 'Fuso Hor�rio';
$strings['Export'] = 'Exportar';
$strings['Select reservations to export'] = 'Selecione as reservas para exportar';
$strings['Export Format'] = 'Formato de exporta��o';
$strings['This resource cannot be reserved less than x hours in advance'] = 'Este recurso n�o pode ser reservado menos de %s horas de anteced�ncia';
$strings['This resource cannot be reserved more than x hours in advance'] = 'Este recurso n�o pode ser reservado mais de %s horas de anteced�ncia';
$strings['Minimum Booking Notice'] = 'M�nimo de Aviso de Reserva';
$strings['Maximum Booking Notice'] = 'M�ximo de Aviso de Reserva';
$strings['hours prior to the start time'] = 'horas antes do in�cio';
$strings['hours from the current time'] = 'horas a partir do momento atual';
$strings['Contains'] = 'Cont�m';
$strings['Begins with'] = 'Come�a com';
$strings['Minimum booking notice is required.'] = 'M�nimo de aviso de reserva � obrigat�rio.';
$strings['Maximum booking notice is required.'] = 'M�ximo de aviso de reserva � obrigat�rio.';
$strings['Accessory Name'] = 'Nome do Acess�rio';
$strings['Accessories'] = 'Acess�rios';
$strings['All Accessories'] = 'Todos os acess�rios';
$strings['Added Accessories'] = 'Acess�rios Adicionados';
// end since 1.2.0

/***
  EMAIL MESSAGES
  Please translate these email messages into your language.  You should keep the sprintf (%s) placeholders
   in their current position unless you know you need to move them.
  All email messages should be surrounded by double quotes "
  Each email message will be described below.
***/
// @since 1.1.0
// Email message that a user gets after they register
$email['register'] = "%s, %s \r\n"
				. "Voc� foi registrado com sucesso com as seguintes informa��es:\r\n"
				. "Logon: %s\r\n"
				. "Nome: %s %s \r\n"
				. "Telefone: %s \r\n"
				. "Institui��o: %s \r\n"
				. "Fun��o: %s \r\n\r\n"
				. "Por favor efetue o login no sistema phpScheduleIt neste link:\r\n"
				. "%s \r\n\r\n"
				. "Voc� pode editar seu perfil no Meu Painel de Controle"
				. "Por favor, dirigir qualquer pergunta baseada em recurso ou reserva para %s";

// Email message the admin gets after a new user registers
$email['register_admin'] = "Administrador,\r\n\r\n"
					. "Um novo usu�rio foi registrado com os seguintes dados:\r\n"
					. "E-mail: %s \r\n"
					. "Nome: %s %s \r\n"
					. "Telefone: %s \r\n"
					. "Institui��o: %s \r\n"
					. "Fun��o: %s \r\n\r\n";

// First part of the email that a user gets after they create/modify/delete a reservation
// 'reservation_activity_1' through 'reservation_activity_6' are all part of one email message
//  that needs to be assembled depending on different options.  Please translate all of them.
// @since 1.1.0
$email['reservation_activity_1'] = "%s,\r\n<br />"
			. "Voc� efetuou com sucesso a %s da reserva #%s.\r\n\r\n<br/><br/>"
			. "Por favor, use o n�mero da reserva para contactar o administrador com alguma pergunta.\r\n\r\n<br/><br/>"
			. "Uma reserva entre %s %s and %s %s for %s"
			. " alocada em %s foi %s.\r\n\r\n<br/><br/>";
$email['reservation_activity_2'] = "Esta reserva foi repetida nas datas seguintes:\r\n<br/>";
$email['reservation_activity_3'] = "Todas as reservas recorrentes para este grupo tamb�m foram %s.\r\n\r\n<br/><br/>";
$email['reservation_activity_4'] = "O seguinte resumo foi provido para esta reserva:\r\n<br/>%s\r\n\r\n<br/><br/>";
$email['reservation_activity_5'] = "Se isto � um erro, favor contatar o administrador em: %s"
			. " ou por telefone %s.\r\n\r\n<br/><br/>"
			. "Voc� pode ver ou modificar sua reserva a qualquer momento"
			. " logando em %s em:\r\n<br/>"
			. "<a href=\"%s\" target=\"_blank\">%s</a>.\r\n\r\n<br/><br/>";
$email['reservation_activity_6'] = "Favor direcionar todas as perguntas t�cnicas para <a href=\"mailto:%s\">%s</a>.\r\n\r\n<br/><br/>";
// @since 1.1.0
$email['reservation_activity_7'] = "%s,\r\n<br />"
			. "A reserva #%s foi aprovada.\r\n\r\n<br/><br/>"
			. "Por favor, use o n�mero da reserva para contactar o administrador com alguma pergunta.\r\n\r\n<br/><br/>"
			. "Uma reserva entre %s %s and %s %s for %s"
			. " localizada em %s foi %s.\r\n\r\n<br/><br/>";
			
// Email that the user gets when the administrator changes their password
$email['password_reset'] = "Sua %s senha foi resetada pelo administrador.\r\n\r\n"
			. "Sua senha tempor�ria �:\r\n\r\n %s\r\n\r\n"
			. "Favor usar esta senha tempor�ria para logar no %s em %s"
			. " e altere-a imediatamente utilziando a op��o 'Alterar meu perfil / senha' na tabela Meus Links.\r\n\r\n"
			. "Favor contatar %s com quaisquer perguntas.";

// Email that the user gets when they change their lost password using the 'Password Reset' form
$email['new_password'] = "%s,\r\n"
            . "Sua nova senha para sua %s conta �:\r\n\r\n"
            . "%s\r\n\r\n"
            . "Favor logar em %s "
            . "com esta nova senha "
            . "(copie e cole para ter certeza que est� correta) "
            . "e altere-a imediatamente clicando na op��o "
            . "Alterar meu perfil / senha "
            . "no Meu Painel de Controle.\r\n\r\n"
            . "Favor enviar quaisquer perguntas para %s.";
			
// @since 1.1.0
// Email that is sent to invite users to a reservation
$email['reservation_invite'] = "%s convidou voc� para participar da seguinte reserva:\r\n\r\n"
		. "Recurso: %s\r\n"
		. "Data de in�cio: %s\r\n"
		. "Hora de in�cio: %s\r\n"
		. "Data de t�rmino: %s\r\n"
		. "Hora de t�rmino: %s\r\n"
		. "Sum�rio: %s\r\n"
		. "Datas repetidas (se presente): %s\r\n\r\n"
		. "Para aceitar este convite clique no link (copie e cole se n�o estiver destacado) %s\r\n"
		. "Para recusar este convite clique no link (copie e cole se n�o estiver destacado) %s\r\n"
		. "Para aceitar algumas datas ou gerenciar seus convites para um tempo posterior, por favor, fa�a login em %s em %s";

// @since 1.1.0
// Email that is sent when a user is removed from a reservation
$email['reservation_removal'] = "Voc� foi removido da seguinte reserva:\r\n\r\n"
		. "Recurso: %s\r\n"
		. "Data de in�cio: %s\r\n"
		. "Hora de in�cio: %s\r\n"
		. "Data de t�rmino: %s\r\n"
		. "Hora de t�rmino: %s\r\n"
		. "Sum�rio: %s\r\n"
		. "Datas repetidas (se presente): %s\r\n\r\n";

// @since 1.2.0
// Email body that is sent for reminders
$email['Reminder Body'] = "Sua reserva para %s de %s %s para %s %s est� se aproximando.";
?>
