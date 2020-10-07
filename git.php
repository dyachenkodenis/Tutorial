Настройка Git клиента для идентификации пользователя:
git config --global user.name "Your Name"
git config --global user.email "your@email.address"
git config --global core.editor "your editor"

Инициализация репозитория в текущем каталоге:
git init

Создает репозиторий в указанном каталоге:
git init <directory>

Клонирование репозитория на локальную машину:
git clone <repo>

Добавить файл для идексации и следить за всеми изменениями в нем ( можно задавать по маске ):
git add <file>

Добавить каталог для индексации:
git add <directory>

Удалить файл из индексации (можно задавать по маске):
git rm <file>

Перенести или переименовать файл / каталог:
git mv <source> <destination>

Сделать "снапшот" всех выполненных изменений:
git commit -a -m "message"

Статус репозитория ( добавление, удаление, изменение файлов ):
git status

Показать историю коммитов:
git log

Показать только определенное количество коммитов:
git log -n <limit>

Показать историю коммитов по конкретному файлу:
git log <file>

Посмотреть различия между последним коммитом и текущими изменениями:
git diff

Просмотр всех различий между коммитами:
git diff <commit> <commit>

Посмотреть различия между коммитами для файла:
git diff <commit> <commit> <file>

Показать список всех файлов в основной ветке:
git ls-tree master -r --name-only

/////////Работа с ветками/////////

Список веток:
git branch

Создание ветки:
git branch <new_branch_name>

Безопастное удаление ветки, если не были сделаны изменения:
git branch -d <branch_name>

Удаление ветки, даже если были сделаны изменения:
git branch -D <branch_name>

Переименование текущей ветки:
git branch -m <rename_current_branch>

Переход к существующей ветке:
git checkout <branch_name>

Создание и переход к ветке:
git checkout -b <new_branch_name>

