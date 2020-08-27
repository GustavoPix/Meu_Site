<?php if(!class_exists('Rain\Tpl')){exit;}?><div class="admCustomPage">
    <div class="setupPage" v-if="sessao == 1">
        <h2>Configurações</h2>
        <ul>
            <li @click="enableDisablePage()">
                <svg width="12" height="15" viewBox="0 0 12 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M0.585786 0.585786C0.960859 0.210714 1.46957 0 2 0H6.66667C6.84348 0 7.01305 0.0702379 7.13807 0.195262L11.8047 4.86193C11.9298 4.98695 12 5.15652 12 5.33333V12.6667C12 13.1971 11.7893 13.7058 11.4142 14.0809C11.0391 14.456 10.5304 14.6667 10 14.6667H2C1.46957 14.6667 0.960859 14.456 0.585786 14.0809C0.210714 13.7058 0 13.1971 0 12.6667V2C0 1.46957 0.210714 0.960859 0.585786 0.585786ZM2 1.33333C1.82319 1.33333 1.65362 1.40357 1.5286 1.5286C1.40357 1.65362 1.33333 1.82319 1.33333 2V12.6667C1.33333 12.8435 1.40357 13.013 1.5286 13.1381C1.65362 13.2631 1.82319 13.3333 2 13.3333H10C10.1768 13.3333 10.3464 13.2631 10.4714 13.1381C10.5964 13.013 10.6667 12.8435 10.6667 12.6667V5.60948L6.39052 1.33333H2Z" fill="white"/>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M6.66667 0C7.03486 0 7.33333 0.298477 7.33333 0.666667V4.66667H11.3333C11.7015 4.66667 12 4.96514 12 5.33333C12 5.70152 11.7015 6 11.3333 6H6.66667C6.29848 6 6 5.70152 6 5.33333V0.666667C6 0.298477 6.29848 0 6.66667 0Z" fill="white"/>
                </svg>
                <p v-if="paginas[selected].posted == 1">Desabilitar</p>
                <p v-else>Habilitar</p>
            </li>
            <li @click="deletePage()">
                <svg width="12" height="15" viewBox="0 0 12 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M0.585786 0.585786C0.960859 0.210714 1.46957 0 2 0H6.66667C6.84348 0 7.01305 0.0702379 7.13807 0.195262L11.8047 4.86193C11.9298 4.98695 12 5.15652 12 5.33333V12.6667C12 13.1971 11.7893 13.7058 11.4142 14.0809C11.0391 14.456 10.5304 14.6667 10 14.6667H2C1.46957 14.6667 0.960859 14.456 0.585786 14.0809C0.210714 13.7058 0 13.1971 0 12.6667V2C0 1.46957 0.210714 0.960859 0.585786 0.585786ZM2 1.33333C1.82319 1.33333 1.65362 1.40357 1.5286 1.5286C1.40357 1.65362 1.33333 1.82319 1.33333 2V12.6667C1.33333 12.8435 1.40357 13.013 1.5286 13.1381C1.65362 13.2631 1.82319 13.3333 2 13.3333H10C10.1768 13.3333 10.3464 13.2631 10.4714 13.1381C10.5964 13.013 10.6667 12.8435 10.6667 12.6667V5.60948L6.39052 1.33333H2Z" fill="white"/>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M6.66667 0C7.03486 0 7.33333 0.298477 7.33333 0.666667V4.66667H11.3333C11.7015 4.66667 12 4.96514 12 5.33333C12 5.70152 11.7015 6 11.3333 6H6.66667C6.29848 6 6 5.70152 6 5.33333V0.666667C6 0.298477 6.29848 0 6.66667 0Z" fill="white"/>
                </svg>
                <p>Deletar</p>
            </li>
            <li @click="editarPagina()">
                <svg width="12" height="15" viewBox="0 0 12 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M0.585786 0.585786C0.960859 0.210714 1.46957 0 2 0H6.66667C6.84348 0 7.01305 0.0702379 7.13807 0.195262L11.8047 4.86193C11.9298 4.98695 12 5.15652 12 5.33333V12.6667C12 13.1971 11.7893 13.7058 11.4142 14.0809C11.0391 14.456 10.5304 14.6667 10 14.6667H2C1.46957 14.6667 0.960859 14.456 0.585786 14.0809C0.210714 13.7058 0 13.1971 0 12.6667V2C0 1.46957 0.210714 0.960859 0.585786 0.585786ZM2 1.33333C1.82319 1.33333 1.65362 1.40357 1.5286 1.5286C1.40357 1.65362 1.33333 1.82319 1.33333 2V12.6667C1.33333 12.8435 1.40357 13.013 1.5286 13.1381C1.65362 13.2631 1.82319 13.3333 2 13.3333H10C10.1768 13.3333 10.3464 13.2631 10.4714 13.1381C10.5964 13.013 10.6667 12.8435 10.6667 12.6667V5.60948L6.39052 1.33333H2Z" fill="white"/>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M6.66667 0C7.03486 0 7.33333 0.298477 7.33333 0.666667V4.66667H11.3333C11.7015 4.66667 12 4.96514 12 5.33333C12 5.70152 11.7015 6 11.3333 6H6.66667C6.29848 6 6 5.70152 6 5.33333V0.666667C6 0.298477 6.29848 0 6.66667 0Z" fill="white"/>
                </svg>
                <p>Editar</p>
            </li>
        </ul>
        <div>
            <label for="">Nome</label>
            <input type="text" name="" id="" v-model="paginas[selected].name">
        </div>
        <div>
            <label for="">Link</label>
            <input type="text" name="" id="" v-model="paginas[selected].link">
        </div>
        <div @click="updatePage()">
            <button type="button">Save</button>
        </div>
    </div>
    <div class="setupPage" v-else-if="sessao == 6">
        <h2>Edição</h2>
        <ul>
            <li >
                <svg width="12" height="15" viewBox="0 0 12 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M0.585786 0.585786C0.960859 0.210714 1.46957 0 2 0H6.66667C6.84348 0 7.01305 0.0702379 7.13807 0.195262L11.8047 4.86193C11.9298 4.98695 12 5.15652 12 5.33333V12.6667C12 13.1971 11.7893 13.7058 11.4142 14.0809C11.0391 14.456 10.5304 14.6667 10 14.6667H2C1.46957 14.6667 0.960859 14.456 0.585786 14.0809C0.210714 13.7058 0 13.1971 0 12.6667V2C0 1.46957 0.210714 0.960859 0.585786 0.585786ZM2 1.33333C1.82319 1.33333 1.65362 1.40357 1.5286 1.5286C1.40357 1.65362 1.33333 1.82319 1.33333 2V12.6667C1.33333 12.8435 1.40357 13.013 1.5286 13.1381C1.65362 13.2631 1.82319 13.3333 2 13.3333H10C10.1768 13.3333 10.3464 13.2631 10.4714 13.1381C10.5964 13.013 10.6667 12.8435 10.6667 12.6667V5.60948L6.39052 1.33333H2Z" fill="white"/>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M6.66667 0C7.03486 0 7.33333 0.298477 7.33333 0.666667V4.66667H11.3333C11.7015 4.66667 12 4.96514 12 5.33333C12 5.70152 11.7015 6 11.3333 6H6.66667C6.29848 6 6 5.70152 6 5.33333V0.666667C6 0.298477 6.29848 0 6.66667 0Z" fill="white"/>
                </svg>
                <p>Cancelar</p>
            </li>
        </ul>
        
        <div @click="updatePageTemplate()">
            <button type="button">Save</button>
        </div>
    </div>
    <div v-else-if="sessao == 2">

    </div>
    <div class="setupPage" v-else-if="sessao == 3">
        <h2>Configurações</h2>
        <ul>
            <li>
                <svg width="12" height="15" viewBox="0 0 12 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M0.585786 0.585786C0.960859 0.210714 1.46957 0 2 0H6.66667C6.84348 0 7.01305 0.0702379 7.13807 0.195262L11.8047 4.86193C11.9298 4.98695 12 5.15652 12 5.33333V12.6667C12 13.1971 11.7893 13.7058 11.4142 14.0809C11.0391 14.456 10.5304 14.6667 10 14.6667H2C1.46957 14.6667 0.960859 14.456 0.585786 14.0809C0.210714 13.7058 0 13.1971 0 12.6667V2C0 1.46957 0.210714 0.960859 0.585786 0.585786ZM2 1.33333C1.82319 1.33333 1.65362 1.40357 1.5286 1.5286C1.40357 1.65362 1.33333 1.82319 1.33333 2V12.6667C1.33333 12.8435 1.40357 13.013 1.5286 13.1381C1.65362 13.2631 1.82319 13.3333 2 13.3333H10C10.1768 13.3333 10.3464 13.2631 10.4714 13.1381C10.5964 13.013 10.6667 12.8435 10.6667 12.6667V5.60948L6.39052 1.33333H2Z" fill="white"/>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M6.66667 0C7.03486 0 7.33333 0.298477 7.33333 0.666667V4.66667H11.3333C11.7015 4.66667 12 4.96514 12 5.33333C12 5.70152 11.7015 6 11.3333 6H6.66667C6.29848 6 6 5.70152 6 5.33333V0.666667C6 0.298477 6.29848 0 6.66667 0Z" fill="white"/>
                </svg>
                <p>Editar</p>
            </li>
        </ul>
        <div>
            <label for="">Nome</label>
            <input type="text" name="" id="" v-model="newPage.name">
        </div>
        <div>
            <label for="">Link</label>
            <input type="text" name="" id="" v-model="newPage.link">
        </div>
        <div @click="createPage()">
            <button type="button">Criar</button>
        </div>
    </div>
    
    <div class="novaSessoes" v-else-if="sessao == 4">
        <div class="row">
            <div @click="backEditarPagina">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-left">
                    <polyline points="15 18 9 12 15 6"></polyline>
                </svg>
            </div>
            <h2>Nova Sessão</h2>
        </div>
        <ul>
            <?php $counter1=-1;  if( isset($templatesCategories) && ( is_array($templatesCategories) || $templatesCategories instanceof Traversable ) && sizeof($templatesCategories) ) foreach( $templatesCategories as $key1 => $value1 ){ $counter1++; ?>
            <li @click="selectMenuNewSection(<?php echo htmlspecialchars( $value1["id"], ENT_COMPAT, 'UTF-8', FALSE ); ?>,'<?php echo htmlspecialchars( $value1["name"], ENT_COMPAT, 'UTF-8', FALSE ); ?>')">
                <h3><?php echo htmlspecialchars( $value1["name"], ENT_COMPAT, 'UTF-8', FALSE ); ?></h3>
                <div class="img">
                    <img src="<?php echo ROUTE_WEBSITE; ?>/img/adm/layouts/<?php echo htmlspecialchars( $value1["thumb"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" alt="">
                </div>
            </li>
            <?php } ?>
        </ul>
    </div>
    <div class="novaSessoes" v-else-if="sessao == 5">
        <div class="row">
            <div @click="backSections">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-left">
                    <polyline points="15 18 9 12 15 6"></polyline>
                </svg>
            </div>
            <h2>{{customSectionSelected.name}}</h2>
        </div>
        <ul>
            <li v-for="section in customSectionSelected.sections" @mouseover="demoSectionHover(section.thumb)" @click="fetchTemplate(section.id)">
                <div class="img">
                    <img :src="'<?php echo ROUTE_WEBSITE; ?>/img/adm/layouts/'+section.thumb" alt="">
                </div>
            </li>
        </ul>
    </div>
    
    
    <div class="previewTemplateArea" v-if="sessao == 5">
        <img :src="'<?php echo ROUTE_WEBSITE; ?>/img/adm/layouts/'+imageSectionHover" alt="">
    </div>
    
    
    <div class="previewSite">
        <div class="websiteContent">
        </div>
        <div v-for="(page,i) in customPageTemplate" class="container" :style="{order:page.order}" v-if="!page.deleted">
            <div v-html="page.template" :id="'temp_page_'+page.id_html" :key="'key_temp_page_'+page.id_html"></div>
            <div class="add" @click="setPositionToAdd(i+1)" v-if="editPageActive">
                <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect y="13" width="30" height="4" rx="2" fill="#15E65C"/>
                    <rect x="17" width="30" height="4" rx="2" transform="rotate(90 17 0)" fill="#15E65C"/>
                </svg>
            </div>
            <div class="remove" @click="removeTemplateContent(i)" v-if="editPageActive">
                <svg width="30" height="4" viewBox="0 0 30 4" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect width="30" height="4" rx="2" fill="#E61515"/>
                </svg>
            </div>
        </div>
        
        <!--
        <div class="container">
            <div class="grid-12">
                <h1>Teste</h1>
                <div class="add">
                    <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect y="13" width="30" height="4" rx="2" fill="#15E65C"/>
                        <rect x="17" width="30" height="4" rx="2" transform="rotate(90 17 0)" fill="#15E65C"/>
                    </svg>
                </div>
                <div class="remove">
                    <svg width="30" height="4" viewBox="0 0 30 4" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect width="30" height="4" rx="2" fill="#E61515"/>
                    </svg>
                </div>
            </div>
        </div>
        -->
        
    </div>
    
</div>