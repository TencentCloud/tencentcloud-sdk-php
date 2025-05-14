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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 模版详情
 *
 * @method string getProjectId() 获取项目id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProjectId(string $ProjectId) 设置项目id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCodeTemplateName() 获取模版名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCodeTemplateName(string $CodeTemplateName) 设置模版名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTaskType() 获取任务类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskType(integer $TaskType) 设置任务类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCodeTemplateDesc() 获取代码模版描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCodeTemplateDesc(string $CodeTemplateDesc) 设置代码模版描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFolderId() 获取文件夹id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFolderId(string $FolderId) 设置文件夹id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFolderName() 获取文件夹名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFolderName(string $FolderName) 设置文件夹名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInCharge() 获取责任人名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInCharge(string $InCharge) 设置责任人名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInChargeId() 获取责任人id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInChargeId(string $InChargeId) 设置责任人id
注意：此字段可能返回 null，表示取不到有效值。
 * @method TaskExtDsVO getExt() 获取扩展信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExt(TaskExtDsVO $Ext) 设置扩展信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCodeTemplateId() 获取模版id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCodeTemplateId(string $CodeTemplateId) 设置模版id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLastUpdateTime() 获取最后更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLastUpdateTime(string $LastUpdateTime) 设置最后更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdateUser() 获取更新人名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdateUser(string $UpdateUser) 设置更新人名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdateUserId() 获取更新人id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdateUserId(string $UpdateUserId) 设置更新人id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBrokerIp() 获取执行ip
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBrokerIp(string $BrokerIp) 设置执行ip
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getResourceGroup() 获取资源组id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResourceGroup(string $ResourceGroup) 设置资源组id
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getSubmit() 获取是否提交
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubmit(boolean $Submit) 设置是否提交
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getScriptChange() 获取任务脚本是否发生变化
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setScriptChange(boolean $ScriptChange) 设置任务脚本是否发生变化
注意：此字段可能返回 null，表示取不到有效值。
 */
class CodeTemplateDetail extends AbstractModel
{
    /**
     * @var string 项目id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProjectId;

    /**
     * @var string 模版名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CodeTemplateName;

    /**
     * @var integer 任务类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskType;

    /**
     * @var string 代码模版描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CodeTemplateDesc;

    /**
     * @var string 文件夹id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FolderId;

    /**
     * @var string 文件夹名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FolderName;

    /**
     * @var string 责任人名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InCharge;

    /**
     * @var string 责任人id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InChargeId;

    /**
     * @var TaskExtDsVO 扩展信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Ext;

    /**
     * @var string 模版id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CodeTemplateId;

    /**
     * @var string 最后更新时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LastUpdateTime;

    /**
     * @var string 更新人名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdateUser;

    /**
     * @var string 更新人id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdateUserId;

    /**
     * @var string 执行ip
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BrokerIp;

    /**
     * @var string 资源组id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResourceGroup;

    /**
     * @var boolean 是否提交
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Submit;

    /**
     * @var boolean 任务脚本是否发生变化
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ScriptChange;

    /**
     * @param string $ProjectId 项目id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CodeTemplateName 模版名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TaskType 任务类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CodeTemplateDesc 代码模版描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FolderId 文件夹id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FolderName 文件夹名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InCharge 责任人名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InChargeId 责任人id
注意：此字段可能返回 null，表示取不到有效值。
     * @param TaskExtDsVO $Ext 扩展信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CodeTemplateId 模版id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LastUpdateTime 最后更新时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdateUser 更新人名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdateUserId 更新人id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BrokerIp 执行ip
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ResourceGroup 资源组id
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $Submit 是否提交
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $ScriptChange 任务脚本是否发生变化
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
    }
}
