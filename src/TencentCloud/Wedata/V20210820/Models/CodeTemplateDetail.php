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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 模版详情
 *
 * @method string getProjectId() 获取<p>项目id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProjectId(string $ProjectId) 设置<p>项目id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCodeTemplateName() 获取<p>模版名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCodeTemplateName(string $CodeTemplateName) 设置<p>模版名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTaskType() 获取<p>任务类型</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskType(integer $TaskType) 设置<p>任务类型</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCodeTemplateDesc() 获取<p>代码模版描述</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCodeTemplateDesc(string $CodeTemplateDesc) 设置<p>代码模版描述</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFolderId() 获取<p>文件夹id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFolderId(string $FolderId) 设置<p>文件夹id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFolderName() 获取<p>文件夹名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFolderName(string $FolderName) 设置<p>文件夹名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInCharge() 获取<p>责任人名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInCharge(string $InCharge) 设置<p>责任人名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInChargeId() 获取<p>责任人id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInChargeId(string $InChargeId) 设置<p>责任人id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method TaskExtDsVO getExt() 获取<p>扩展信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExt(TaskExtDsVO $Ext) 设置<p>扩展信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCodeTemplateId() 获取<p>模版id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCodeTemplateId(string $CodeTemplateId) 设置<p>模版id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLastUpdateTime() 获取<p>最后更新时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLastUpdateTime(string $LastUpdateTime) 设置<p>最后更新时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdateUser() 获取<p>更新人名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdateUser(string $UpdateUser) 设置<p>更新人名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdateUserId() 获取<p>更新人id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdateUserId(string $UpdateUserId) 设置<p>更新人id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBrokerIp() 获取<p>执行ip</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBrokerIp(string $BrokerIp) 设置<p>执行ip</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getResourceGroup() 获取<p>资源组id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResourceGroup(string $ResourceGroup) 设置<p>资源组id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getSubmit() 获取<p>是否提交</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubmit(boolean $Submit) 设置<p>是否提交</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getScriptChange() 获取<p>模版脚本是否发生变化</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setScriptChange(boolean $ScriptChange) 设置<p>模版脚本是否发生变化</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getContent() 获取<p>代码模版脚本，base64编码返回</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setContent(string $Content) 设置<p>代码模版脚本，base64编码返回</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPrivilege() 获取<p>用户对该资源的最高权限</p><p>枚举值：</p><ul><li>NO_PERMISSIONS： 无权限</li><li>CAN_VIEW： 只读权限</li><li>CAN_MANAGE： 管理权限</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPrivilege(string $Privilege) 设置<p>用户对该资源的最高权限</p><p>枚举值：</p><ul><li>NO_PERMISSIONS： 无权限</li><li>CAN_VIEW： 只读权限</li><li>CAN_MANAGE： 管理权限</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
 */
class CodeTemplateDetail extends AbstractModel
{
    /**
     * @var string <p>项目id</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProjectId;

    /**
     * @var string <p>模版名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CodeTemplateName;

    /**
     * @var integer <p>任务类型</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskType;

    /**
     * @var string <p>代码模版描述</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CodeTemplateDesc;

    /**
     * @var string <p>文件夹id</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FolderId;

    /**
     * @var string <p>文件夹名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FolderName;

    /**
     * @var string <p>责任人名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InCharge;

    /**
     * @var string <p>责任人id</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InChargeId;

    /**
     * @var TaskExtDsVO <p>扩展信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Ext;

    /**
     * @var string <p>模版id</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CodeTemplateId;

    /**
     * @var string <p>最后更新时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LastUpdateTime;

    /**
     * @var string <p>更新人名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdateUser;

    /**
     * @var string <p>更新人id</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdateUserId;

    /**
     * @var string <p>执行ip</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BrokerIp;

    /**
     * @var string <p>资源组id</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResourceGroup;

    /**
     * @var boolean <p>是否提交</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Submit;

    /**
     * @var boolean <p>模版脚本是否发生变化</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ScriptChange;

    /**
     * @var string <p>代码模版脚本，base64编码返回</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Content;

    /**
     * @var string <p>用户对该资源的最高权限</p><p>枚举值：</p><ul><li>NO_PERMISSIONS： 无权限</li><li>CAN_VIEW： 只读权限</li><li>CAN_MANAGE： 管理权限</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Privilege;

    /**
     * @param string $ProjectId <p>项目id</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CodeTemplateName <p>模版名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TaskType <p>任务类型</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CodeTemplateDesc <p>代码模版描述</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FolderId <p>文件夹id</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FolderName <p>文件夹名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InCharge <p>责任人名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InChargeId <p>责任人id</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param TaskExtDsVO $Ext <p>扩展信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CodeTemplateId <p>模版id</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LastUpdateTime <p>最后更新时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdateUser <p>更新人名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdateUserId <p>更新人id</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BrokerIp <p>执行ip</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ResourceGroup <p>资源组id</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $Submit <p>是否提交</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $ScriptChange <p>模版脚本是否发生变化</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Content <p>代码模版脚本，base64编码返回</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Privilege <p>用户对该资源的最高权限</p><p>枚举值：</p><ul><li>NO_PERMISSIONS： 无权限</li><li>CAN_VIEW： 只读权限</li><li>CAN_MANAGE： 管理权限</li></ul>
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
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("CodeTemplateName",$param) and $param["CodeTemplateName"] !== null) {
            $this->CodeTemplateName = $param["CodeTemplateName"];
        }

        if (array_key_exists("TaskType",$param) and $param["TaskType"] !== null) {
            $this->TaskType = $param["TaskType"];
        }

        if (array_key_exists("CodeTemplateDesc",$param) and $param["CodeTemplateDesc"] !== null) {
            $this->CodeTemplateDesc = $param["CodeTemplateDesc"];
        }

        if (array_key_exists("FolderId",$param) and $param["FolderId"] !== null) {
            $this->FolderId = $param["FolderId"];
        }

        if (array_key_exists("FolderName",$param) and $param["FolderName"] !== null) {
            $this->FolderName = $param["FolderName"];
        }

        if (array_key_exists("InCharge",$param) and $param["InCharge"] !== null) {
            $this->InCharge = $param["InCharge"];
        }

        if (array_key_exists("InChargeId",$param) and $param["InChargeId"] !== null) {
            $this->InChargeId = $param["InChargeId"];
        }

        if (array_key_exists("Ext",$param) and $param["Ext"] !== null) {
            $this->Ext = new TaskExtDsVO();
            $this->Ext->deserialize($param["Ext"]);
        }

        if (array_key_exists("CodeTemplateId",$param) and $param["CodeTemplateId"] !== null) {
            $this->CodeTemplateId = $param["CodeTemplateId"];
        }

        if (array_key_exists("LastUpdateTime",$param) and $param["LastUpdateTime"] !== null) {
            $this->LastUpdateTime = $param["LastUpdateTime"];
        }

        if (array_key_exists("UpdateUser",$param) and $param["UpdateUser"] !== null) {
            $this->UpdateUser = $param["UpdateUser"];
        }

        if (array_key_exists("UpdateUserId",$param) and $param["UpdateUserId"] !== null) {
            $this->UpdateUserId = $param["UpdateUserId"];
        }

        if (array_key_exists("BrokerIp",$param) and $param["BrokerIp"] !== null) {
            $this->BrokerIp = $param["BrokerIp"];
        }

        if (array_key_exists("ResourceGroup",$param) and $param["ResourceGroup"] !== null) {
            $this->ResourceGroup = $param["ResourceGroup"];
        }

        if (array_key_exists("Submit",$param) and $param["Submit"] !== null) {
            $this->Submit = $param["Submit"];
        }

        if (array_key_exists("ScriptChange",$param) and $param["ScriptChange"] !== null) {
            $this->ScriptChange = $param["ScriptChange"];
        }

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }

        if (array_key_exists("Privilege",$param) and $param["Privilege"] !== null) {
            $this->Privilege = $param["Privilege"];
        }
    }
}
