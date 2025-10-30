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
namespace TencentCloud\Cfg\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 动作库数据列表
 *
 * @method string getActionName() 获取动作名称
 * @method void setActionName(string $ActionName) 设置动作名称
 * @method string getDesc() 获取动作描述
 * @method void setDesc(string $Desc) 设置动作描述
 * @method string getActionType() 获取动作类型。范围：["平台","自定义"]
 * @method void setActionType(string $ActionType) 设置动作类型。范围：["平台","自定义"]
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 * @method string getCreator() 获取创建人
 * @method void setCreator(string $Creator) 设置创建人
 * @method string getUpdateTime() 获取更新时间
 * @method void setUpdateTime(string $UpdateTime) 设置更新时间
 * @method string getRiskDesc() 获取动作风险描述
 * @method void setRiskDesc(string $RiskDesc) 设置动作风险描述
 * @method integer getActionId() 获取动作ID
 * @method void setActionId(integer $ActionId) 设置动作ID
 * @method integer getAttributeId() 获取动作属性（ 1：故障  2：恢复）
 * @method void setAttributeId(integer $AttributeId) 设置动作属性（ 1：故障  2：恢复）
 * @method integer getRelationActionId() 获取关联的动作ID
 * @method void setRelationActionId(integer $RelationActionId) 设置关联的动作ID
 * @method string getActionCommand() 获取操作命令
 * @method void setActionCommand(string $ActionCommand) 设置操作命令
 * @method integer getActionCommandType() 获取动作类型（0 -- tat   1 -- 云API）
 * @method void setActionCommandType(integer $ActionCommandType) 设置动作类型（0 -- tat   1 -- 云API）
 * @method string getActionContent() 获取自定义动作的参数，json string
 * @method void setActionContent(string $ActionContent) 设置自定义动作的参数，json string
 * @method string getResourceType() 获取二级分类
 * @method void setResourceType(string $ResourceType) 设置二级分类
 * @method string getActionDetail() 获取动作描述
 * @method void setActionDetail(string $ActionDetail) 设置动作描述
 * @method boolean getIsAllowed() 获取是否允许当前账号使用
 * @method void setIsAllowed(boolean $IsAllowed) 设置是否允许当前账号使用
 * @method string getActionBestCase() 获取最佳实践案例的链接地址
 * @method void setActionBestCase(string $ActionBestCase) 设置最佳实践案例的链接地址
 * @method string getObjectType() 获取对象类型
 * @method void setObjectType(string $ObjectType) 设置对象类型
 * @method array getMetricIdList() 获取监控指标ID列表
 * @method void setMetricIdList(array $MetricIdList) 设置监控指标ID列表
 * @method boolean getIsNewAction() 获取是否是新动作
 * @method void setIsNewAction(boolean $IsNewAction) 设置是否是新动作
 * @method integer getObjectTypeId() 获取对象类型ID
 * @method void setObjectTypeId(integer $ObjectTypeId) 设置对象类型ID
 */
class ActionLibraryListResult extends AbstractModel
{
    /**
     * @var string 动作名称
     */
    public $ActionName;

    /**
     * @var string 动作描述
     */
    public $Desc;

    /**
     * @var string 动作类型。范围：["平台","自定义"]
     */
    public $ActionType;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @var string 创建人
     */
    public $Creator;

    /**
     * @var string 更新时间
     */
    public $UpdateTime;

    /**
     * @var string 动作风险描述
     */
    public $RiskDesc;

    /**
     * @var integer 动作ID
     */
    public $ActionId;

    /**
     * @var integer 动作属性（ 1：故障  2：恢复）
     */
    public $AttributeId;

    /**
     * @var integer 关联的动作ID
     */
    public $RelationActionId;

    /**
     * @var string 操作命令
     */
    public $ActionCommand;

    /**
     * @var integer 动作类型（0 -- tat   1 -- 云API）
     */
    public $ActionCommandType;

    /**
     * @var string 自定义动作的参数，json string
     */
    public $ActionContent;

    /**
     * @var string 二级分类
     */
    public $ResourceType;

    /**
     * @var string 动作描述
     */
    public $ActionDetail;

    /**
     * @var boolean 是否允许当前账号使用
     */
    public $IsAllowed;

    /**
     * @var string 最佳实践案例的链接地址
     */
    public $ActionBestCase;

    /**
     * @var string 对象类型
     */
    public $ObjectType;

    /**
     * @var array 监控指标ID列表
     */
    public $MetricIdList;

    /**
     * @var boolean 是否是新动作
     */
    public $IsNewAction;

    /**
     * @var integer 对象类型ID
     */
    public $ObjectTypeId;

    /**
     * @param string $ActionName 动作名称
     * @param string $Desc 动作描述
     * @param string $ActionType 动作类型。范围：["平台","自定义"]
     * @param string $CreateTime 创建时间
     * @param string $Creator 创建人
     * @param string $UpdateTime 更新时间
     * @param string $RiskDesc 动作风险描述
     * @param integer $ActionId 动作ID
     * @param integer $AttributeId 动作属性（ 1：故障  2：恢复）
     * @param integer $RelationActionId 关联的动作ID
     * @param string $ActionCommand 操作命令
     * @param integer $ActionCommandType 动作类型（0 -- tat   1 -- 云API）
     * @param string $ActionContent 自定义动作的参数，json string
     * @param string $ResourceType 二级分类
     * @param string $ActionDetail 动作描述
     * @param boolean $IsAllowed 是否允许当前账号使用
     * @param string $ActionBestCase 最佳实践案例的链接地址
     * @param string $ObjectType 对象类型
     * @param array $MetricIdList 监控指标ID列表
     * @param boolean $IsNewAction 是否是新动作
     * @param integer $ObjectTypeId 对象类型ID
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
        if (array_key_exists("ActionName",$param) and $param["ActionName"] !== null) {
            $this->ActionName = $param["ActionName"];
        }

        if (array_key_exists("Desc",$param) and $param["Desc"] !== null) {
            $this->Desc = $param["Desc"];
        }

        if (array_key_exists("ActionType",$param) and $param["ActionType"] !== null) {
            $this->ActionType = $param["ActionType"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("Creator",$param) and $param["Creator"] !== null) {
            $this->Creator = $param["Creator"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("RiskDesc",$param) and $param["RiskDesc"] !== null) {
            $this->RiskDesc = $param["RiskDesc"];
        }

        if (array_key_exists("ActionId",$param) and $param["ActionId"] !== null) {
            $this->ActionId = $param["ActionId"];
        }

        if (array_key_exists("AttributeId",$param) and $param["AttributeId"] !== null) {
            $this->AttributeId = $param["AttributeId"];
        }

        if (array_key_exists("RelationActionId",$param) and $param["RelationActionId"] !== null) {
            $this->RelationActionId = $param["RelationActionId"];
        }

        if (array_key_exists("ActionCommand",$param) and $param["ActionCommand"] !== null) {
            $this->ActionCommand = $param["ActionCommand"];
        }

        if (array_key_exists("ActionCommandType",$param) and $param["ActionCommandType"] !== null) {
            $this->ActionCommandType = $param["ActionCommandType"];
        }

        if (array_key_exists("ActionContent",$param) and $param["ActionContent"] !== null) {
            $this->ActionContent = $param["ActionContent"];
        }

        if (array_key_exists("ResourceType",$param) and $param["ResourceType"] !== null) {
            $this->ResourceType = $param["ResourceType"];
        }

        if (array_key_exists("ActionDetail",$param) and $param["ActionDetail"] !== null) {
            $this->ActionDetail = $param["ActionDetail"];
        }

        if (array_key_exists("IsAllowed",$param) and $param["IsAllowed"] !== null) {
            $this->IsAllowed = $param["IsAllowed"];
        }

        if (array_key_exists("ActionBestCase",$param) and $param["ActionBestCase"] !== null) {
            $this->ActionBestCase = $param["ActionBestCase"];
        }

        if (array_key_exists("ObjectType",$param) and $param["ObjectType"] !== null) {
            $this->ObjectType = $param["ObjectType"];
        }

        if (array_key_exists("MetricIdList",$param) and $param["MetricIdList"] !== null) {
            $this->MetricIdList = $param["MetricIdList"];
        }

        if (array_key_exists("IsNewAction",$param) and $param["IsNewAction"] !== null) {
            $this->IsNewAction = $param["IsNewAction"];
        }

        if (array_key_exists("ObjectTypeId",$param) and $param["ObjectTypeId"] !== null) {
            $this->ObjectTypeId = $param["ObjectTypeId"];
        }
    }
}
