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
namespace TencentCloud\Iss\V20230517\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpdateRecordBackupTemplate请求参数结构体
 *
 * @method string getTemplateId() 获取模板ID（从查询录像上云模板列表接口ListRecordBackupTemplates中获取）
 * @method void setTemplateId(string $TemplateId) 设置模板ID（从查询录像上云模板列表接口ListRecordBackupTemplates中获取）
 * @method UpdateRecordBackupTemplateModify getMod() 获取修改录像上云模板数据
 * @method void setMod(UpdateRecordBackupTemplateModify $Mod) 设置修改录像上云模板数据
 */
class UpdateRecordBackupTemplateRequest extends AbstractModel
{
    /**
     * @var string 模板ID（从查询录像上云模板列表接口ListRecordBackupTemplates中获取）
     */
    public $TemplateId;

    /**
     * @var UpdateRecordBackupTemplateModify 修改录像上云模板数据
     */
    public $Mod;

    /**
     * @param string $TemplateId 模板ID（从查询录像上云模板列表接口ListRecordBackupTemplates中获取）
     * @param UpdateRecordBackupTemplateModify $Mod 修改录像上云模板数据
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
        if (array_key_exists("TemplateId",$param) and $param["TemplateId"] !== null) {
            $this->TemplateId = $param["TemplateId"];
        }

        if (array_key_exists("Mod",$param) and $param["Mod"] !== null) {
            $this->Mod = new UpdateRecordBackupTemplateModify();
            $this->Mod->deserialize($param["Mod"]);
        }
    }
}
