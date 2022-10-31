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
namespace TencentCloud\Ccc\V20200210\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyExtension请求参数结构体
 *
 * @method integer getSdkAppId() 获取TCCC 实例应用 ID
 * @method void setSdkAppId(integer $SdkAppId) 设置TCCC 实例应用 ID
 * @method string getExtensionId() 获取分机号
 * @method void setExtensionId(string $ExtensionId) 设置分机号
 * @method string getExtensionName() 获取分机名称
 * @method void setExtensionName(string $ExtensionName) 设置分机名称
 * @method array getSkillGroupIds() 获取所属技能组列表
 * @method void setSkillGroupIds(array $SkillGroupIds) 设置所属技能组列表
 * @method string getRelation() 获取绑定坐席邮箱账号
 * @method void setRelation(string $Relation) 设置绑定坐席邮箱账号
 */
class ModifyExtensionRequest extends AbstractModel
{
    /**
     * @var integer TCCC 实例应用 ID
     */
    public $SdkAppId;

    /**
     * @var string 分机号
     */
    public $ExtensionId;

    /**
     * @var string 分机名称
     */
    public $ExtensionName;

    /**
     * @var array 所属技能组列表
     */
    public $SkillGroupIds;

    /**
     * @var string 绑定坐席邮箱账号
     */
    public $Relation;

    /**
     * @param integer $SdkAppId TCCC 实例应用 ID
     * @param string $ExtensionId 分机号
     * @param string $ExtensionName 分机名称
     * @param array $SkillGroupIds 所属技能组列表
     * @param string $Relation 绑定坐席邮箱账号
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
        if (array_key_exists("SdkAppId",$param) and $param["SdkAppId"] !== null) {
            $this->SdkAppId = $param["SdkAppId"];
        }

        if (array_key_exists("ExtensionId",$param) and $param["ExtensionId"] !== null) {
            $this->ExtensionId = $param["ExtensionId"];
        }

        if (array_key_exists("ExtensionName",$param) and $param["ExtensionName"] !== null) {
            $this->ExtensionName = $param["ExtensionName"];
        }

        if (array_key_exists("SkillGroupIds",$param) and $param["SkillGroupIds"] !== null) {
            $this->SkillGroupIds = $param["SkillGroupIds"];
        }

        if (array_key_exists("Relation",$param) and $param["Relation"] !== null) {
            $this->Relation = $param["Relation"];
        }
    }
}
