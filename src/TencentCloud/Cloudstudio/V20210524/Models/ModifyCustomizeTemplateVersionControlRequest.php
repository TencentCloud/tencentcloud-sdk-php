<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
namespace TencentCloud\Cloudstudio\V20210524\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyCustomizeTemplateVersionControl请求参数结构体
 *
 * @method string getCloudStudioSessionTeam() 获取用户所属组
 * @method void setCloudStudioSessionTeam(string $CloudStudioSessionTeam) 设置用户所属组
 * @method integer getTemplateId() 获取模板ID
 * @method void setTemplateId(integer $TemplateId) 设置模板ID
 * @method string getUrl() 获取仓库地址
 * @method void setUrl(string $Url) 设置仓库地址
 * @method string getRef() 获取代码仓库分支/标签
 * @method void setRef(string $Ref) 设置代码仓库分支/标签
 * @method string getRefType() 获取代码仓库 ref 类型
 * @method void setRefType(string $RefType) 设置代码仓库 ref 类型
 */
class ModifyCustomizeTemplateVersionControlRequest extends AbstractModel
{
    /**
     * @var string 用户所属组
     */
    public $CloudStudioSessionTeam;

    /**
     * @var integer 模板ID
     */
    public $TemplateId;

    /**
     * @var string 仓库地址
     */
    public $Url;

    /**
     * @var string 代码仓库分支/标签
     */
    public $Ref;

    /**
     * @var string 代码仓库 ref 类型
     */
    public $RefType;

    /**
     * @param string $CloudStudioSessionTeam 用户所属组
     * @param integer $TemplateId 模板ID
     * @param string $Url 仓库地址
     * @param string $Ref 代码仓库分支/标签
     * @param string $RefType 代码仓库 ref 类型
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
        if (array_key_exists("CloudStudioSessionTeam",$param) and $param["CloudStudioSessionTeam"] !== null) {
            $this->CloudStudioSessionTeam = $param["CloudStudioSessionTeam"];
        }

        if (array_key_exists("TemplateId",$param) and $param["TemplateId"] !== null) {
            $this->TemplateId = $param["TemplateId"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("Ref",$param) and $param["Ref"] !== null) {
            $this->Ref = $param["Ref"];
        }

        if (array_key_exists("RefType",$param) and $param["RefType"] !== null) {
            $this->RefType = $param["RefType"];
        }
    }
}
