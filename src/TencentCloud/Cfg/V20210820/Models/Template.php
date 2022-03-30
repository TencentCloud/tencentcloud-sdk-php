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
namespace TencentCloud\Cfg\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 经验库
 *
 * @method integer getTemplateId() 获取经验库ID
 * @method void setTemplateId(integer $TemplateId) 设置经验库ID
 * @method string getTemplateTitle() 获取经验库标题
 * @method void setTemplateTitle(string $TemplateTitle) 设置经验库标题
 * @method string getTemplateDescription() 获取经验库描述
 * @method void setTemplateDescription(string $TemplateDescription) 设置经验库描述
 * @method string getTemplateTag() 获取自定义标签
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTemplateTag(string $TemplateTag) 设置自定义标签
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTemplateIsUsed() 获取使用状态。1 ---- 使用中，2 --- 停用
 * @method void setTemplateIsUsed(integer $TemplateIsUsed) 设置使用状态。1 ---- 使用中，2 --- 停用
 * @method string getTemplateCreateTime() 获取经验库创建时间
 * @method void setTemplateCreateTime(string $TemplateCreateTime) 设置经验库创建时间
 * @method string getTemplateUpdateTime() 获取经验库更新时间
 * @method void setTemplateUpdateTime(string $TemplateUpdateTime) 设置经验库更新时间
 * @method integer getTemplateMode() 获取经验库模式。1:手工执行，2:自动执行
 * @method void setTemplateMode(integer $TemplateMode) 设置经验库模式。1:手工执行，2:自动执行
 * @method integer getTemplatePauseDuration() 获取自动暂停时长。单位分钟
 * @method void setTemplatePauseDuration(integer $TemplatePauseDuration) 设置自动暂停时长。单位分钟
 * @method string getTemplateOwnerUin() 获取演练创建者Uin
 * @method void setTemplateOwnerUin(string $TemplateOwnerUin) 设置演练创建者Uin
 * @method integer getTemplateRegionId() 获取地域ID
 * @method void setTemplateRegionId(integer $TemplateRegionId) 设置地域ID
 * @method array getTemplateGroups() 获取动作组
 * @method void setTemplateGroups(array $TemplateGroups) 设置动作组
 * @method array getTemplateMonitors() 获取监控指标
 * @method void setTemplateMonitors(array $TemplateMonitors) 设置监控指标
 * @method TemplatePolicy getTemplatePolicy() 获取护栏监控
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTemplatePolicy(TemplatePolicy $TemplatePolicy) 设置护栏监控
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTags() 获取标签列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTags(array $Tags) 设置标签列表
注意：此字段可能返回 null，表示取不到有效值。
 */
class Template extends AbstractModel
{
    /**
     * @var integer 经验库ID
     */
    public $TemplateId;

    /**
     * @var string 经验库标题
     */
    public $TemplateTitle;

    /**
     * @var string 经验库描述
     */
    public $TemplateDescription;

    /**
     * @var string 自定义标签
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TemplateTag;

    /**
     * @var integer 使用状态。1 ---- 使用中，2 --- 停用
     */
    public $TemplateIsUsed;

    /**
     * @var string 经验库创建时间
     */
    public $TemplateCreateTime;

    /**
     * @var string 经验库更新时间
     */
    public $TemplateUpdateTime;

    /**
     * @var integer 经验库模式。1:手工执行，2:自动执行
     */
    public $TemplateMode;

    /**
     * @var integer 自动暂停时长。单位分钟
     */
    public $TemplatePauseDuration;

    /**
     * @var string 演练创建者Uin
     */
    public $TemplateOwnerUin;

    /**
     * @var integer 地域ID
     */
    public $TemplateRegionId;

    /**
     * @var array 动作组
     */
    public $TemplateGroups;

    /**
     * @var array 监控指标
     */
    public $TemplateMonitors;

    /**
     * @var TemplatePolicy 护栏监控
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TemplatePolicy;

    /**
     * @var array 标签列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Tags;

    /**
     * @param integer $TemplateId 经验库ID
     * @param string $TemplateTitle 经验库标题
     * @param string $TemplateDescription 经验库描述
     * @param string $TemplateTag 自定义标签
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TemplateIsUsed 使用状态。1 ---- 使用中，2 --- 停用
     * @param string $TemplateCreateTime 经验库创建时间
     * @param string $TemplateUpdateTime 经验库更新时间
     * @param integer $TemplateMode 经验库模式。1:手工执行，2:自动执行
     * @param integer $TemplatePauseDuration 自动暂停时长。单位分钟
     * @param string $TemplateOwnerUin 演练创建者Uin
     * @param integer $TemplateRegionId 地域ID
     * @param array $TemplateGroups 动作组
     * @param array $TemplateMonitors 监控指标
     * @param TemplatePolicy $TemplatePolicy 护栏监控
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Tags 标签列表
注意：此字段可能返回 null，表示取不到有效值。
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

        if (array_key_exists("TemplateTitle",$param) and $param["TemplateTitle"] !== null) {
            $this->TemplateTitle = $param["TemplateTitle"];
        }

        if (array_key_exists("TemplateDescription",$param) and $param["TemplateDescription"] !== null) {
            $this->TemplateDescription = $param["TemplateDescription"];
        }

        if (array_key_exists("TemplateTag",$param) and $param["TemplateTag"] !== null) {
            $this->TemplateTag = $param["TemplateTag"];
        }

        if (array_key_exists("TemplateIsUsed",$param) and $param["TemplateIsUsed"] !== null) {
            $this->TemplateIsUsed = $param["TemplateIsUsed"];
        }

        if (array_key_exists("TemplateCreateTime",$param) and $param["TemplateCreateTime"] !== null) {
            $this->TemplateCreateTime = $param["TemplateCreateTime"];
        }

        if (array_key_exists("TemplateUpdateTime",$param) and $param["TemplateUpdateTime"] !== null) {
            $this->TemplateUpdateTime = $param["TemplateUpdateTime"];
        }

        if (array_key_exists("TemplateMode",$param) and $param["TemplateMode"] !== null) {
            $this->TemplateMode = $param["TemplateMode"];
        }

        if (array_key_exists("TemplatePauseDuration",$param) and $param["TemplatePauseDuration"] !== null) {
            $this->TemplatePauseDuration = $param["TemplatePauseDuration"];
        }

        if (array_key_exists("TemplateOwnerUin",$param) and $param["TemplateOwnerUin"] !== null) {
            $this->TemplateOwnerUin = $param["TemplateOwnerUin"];
        }

        if (array_key_exists("TemplateRegionId",$param) and $param["TemplateRegionId"] !== null) {
            $this->TemplateRegionId = $param["TemplateRegionId"];
        }

        if (array_key_exists("TemplateGroups",$param) and $param["TemplateGroups"] !== null) {
            $this->TemplateGroups = [];
            foreach ($param["TemplateGroups"] as $key => $value){
                $obj = new TemplateGroup();
                $obj->deserialize($value);
                array_push($this->TemplateGroups, $obj);
            }
        }

        if (array_key_exists("TemplateMonitors",$param) and $param["TemplateMonitors"] !== null) {
            $this->TemplateMonitors = [];
            foreach ($param["TemplateMonitors"] as $key => $value){
                $obj = new TemplateMonitor();
                $obj->deserialize($value);
                array_push($this->TemplateMonitors, $obj);
            }
        }

        if (array_key_exists("TemplatePolicy",$param) and $param["TemplatePolicy"] !== null) {
            $this->TemplatePolicy = new TemplatePolicy();
            $this->TemplatePolicy->deserialize($param["TemplatePolicy"]);
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new TagWithDescribe();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }
    }
}
