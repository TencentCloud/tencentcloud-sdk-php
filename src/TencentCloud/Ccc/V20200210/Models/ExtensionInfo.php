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
 * 话机信息
 *
 * @method integer getSdkAppId() 获取实例ID
 * @method void setSdkAppId(integer $SdkAppId) 设置实例ID
 * @method string getFullExtensionId() 获取分机全名
 * @method void setFullExtensionId(string $FullExtensionId) 设置分机全名
 * @method string getExtensionId() 获取分机号
 * @method void setExtensionId(string $ExtensionId) 设置分机号
 * @method string getSkillGroupId() 获取所属技能组列表
 * @method void setSkillGroupId(string $SkillGroupId) 设置所属技能组列表
 * @method string getExtensionName() 获取分机名称
 * @method void setExtensionName(string $ExtensionName) 设置分机名称
 * @method integer getCreateTime() 获取创建时间
 * @method void setCreateTime(integer $CreateTime) 设置创建时间
 * @method integer getModifyTime() 获取最后修改时间
 * @method void setModifyTime(integer $ModifyTime) 设置最后修改时间
 * @method integer getStatus() 获取话机状态(0 离线、100 空闲、200忙碌）
 * @method void setStatus(integer $Status) 设置话机状态(0 离线、100 空闲、200忙碌）
 * @method boolean getRegister() 获取是否注册
 * @method void setRegister(boolean $Register) 设置是否注册
 * @method string getRelation() 获取绑定坐席邮箱
 * @method void setRelation(string $Relation) 设置绑定坐席邮箱
 * @method string getRelationName() 获取绑定坐席名称
 * @method void setRelationName(string $RelationName) 设置绑定坐席名称
 */
class ExtensionInfo extends AbstractModel
{
    /**
     * @var integer 实例ID
     */
    public $SdkAppId;

    /**
     * @var string 分机全名
     */
    public $FullExtensionId;

    /**
     * @var string 分机号
     */
    public $ExtensionId;

    /**
     * @var string 所属技能组列表
     */
    public $SkillGroupId;

    /**
     * @var string 分机名称
     */
    public $ExtensionName;

    /**
     * @var integer 创建时间
     */
    public $CreateTime;

    /**
     * @var integer 最后修改时间
     */
    public $ModifyTime;

    /**
     * @var integer 话机状态(0 离线、100 空闲、200忙碌）
     */
    public $Status;

    /**
     * @var boolean 是否注册
     */
    public $Register;

    /**
     * @var string 绑定坐席邮箱
     */
    public $Relation;

    /**
     * @var string 绑定坐席名称
     */
    public $RelationName;

    /**
     * @param integer $SdkAppId 实例ID
     * @param string $FullExtensionId 分机全名
     * @param string $ExtensionId 分机号
     * @param string $SkillGroupId 所属技能组列表
     * @param string $ExtensionName 分机名称
     * @param integer $CreateTime 创建时间
     * @param integer $ModifyTime 最后修改时间
     * @param integer $Status 话机状态(0 离线、100 空闲、200忙碌）
     * @param boolean $Register 是否注册
     * @param string $Relation 绑定坐席邮箱
     * @param string $RelationName 绑定坐席名称
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

        if (array_key_exists("FullExtensionId",$param) and $param["FullExtensionId"] !== null) {
            $this->FullExtensionId = $param["FullExtensionId"];
        }

        if (array_key_exists("ExtensionId",$param) and $param["ExtensionId"] !== null) {
            $this->ExtensionId = $param["ExtensionId"];
        }

        if (array_key_exists("SkillGroupId",$param) and $param["SkillGroupId"] !== null) {
            $this->SkillGroupId = $param["SkillGroupId"];
        }

        if (array_key_exists("ExtensionName",$param) and $param["ExtensionName"] !== null) {
            $this->ExtensionName = $param["ExtensionName"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Register",$param) and $param["Register"] !== null) {
            $this->Register = $param["Register"];
        }

        if (array_key_exists("Relation",$param) and $param["Relation"] !== null) {
            $this->Relation = $param["Relation"];
        }

        if (array_key_exists("RelationName",$param) and $param["RelationName"] !== null) {
            $this->RelationName = $param["RelationName"];
        }
    }
}
