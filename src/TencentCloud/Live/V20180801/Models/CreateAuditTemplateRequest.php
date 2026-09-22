<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Live\V20180801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateAuditTemplate请求参数结构体
 *
 * @method AuditTemplate getAuditTemplate() 获取<p>审核模板。</p>
 * @method void setAuditTemplate(AuditTemplate $AuditTemplate) 设置<p>审核模板。</p>
 */
class CreateAuditTemplateRequest extends AbstractModel
{
    /**
     * @var AuditTemplate <p>审核模板。</p>
     */
    public $AuditTemplate;

    /**
     * @param AuditTemplate $AuditTemplate <p>审核模板。</p>
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("AuditTemplate",$param) and $param["AuditTemplate"] !== null) {
            $this->AuditTemplate = new AuditTemplate();
            $this->AuditTemplate->deserialize($param["AuditTemplate"]);
        }
    }
}
