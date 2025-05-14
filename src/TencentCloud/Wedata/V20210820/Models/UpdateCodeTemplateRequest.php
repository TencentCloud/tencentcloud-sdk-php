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
 * UpdateCodeTemplate请求参数结构体
 *
 * @method string getProjectId() 获取项目Id
 * @method void setProjectId(string $ProjectId) 设置项目Id
 * @method string getCodeTemplateId() 获取模版id
 * @method void setCodeTemplateId(string $CodeTemplateId) 设置模版id
 * @method string getCodeTemplateName() 获取模版名	
 * @method void setCodeTemplateName(string $CodeTemplateName) 设置模版名	
 * @method string getInChargeId() 获取责任人列表
 * @method void setInChargeId(string $InChargeId) 设置责任人列表
 * @method string getInCharge() 获取责任人名称
 * @method void setInCharge(string $InCharge) 设置责任人名称
 * @method TaskExtDsVO getExt() 获取扩展属性
 * @method void setExt(TaskExtDsVO $Ext) 设置扩展属性
 * @method string getBrokerIp() 获取执行机ip
 * @method void setBrokerIp(string $BrokerIp) 设置执行机ip
 * @method string getResourceGroup() 获取资源组id
 * @method void setResourceGroup(string $ResourceGroup) 设置资源组id
 * @method string getCodeTemplateDesc() 获取模版描述	
 * @method void setCodeTemplateDesc(string $CodeTemplateDesc) 设置模版描述	
 * @method string getRequestFromSource() 获取请求来源，WEB 前端；CLIENT 客户端
 * @method void setRequestFromSource(string $RequestFromSource) 设置请求来源，WEB 前端；CLIENT 客户端
 * @method boolean getScriptChange() 获取脚本是否发生变化
 * @method void setScriptChange(boolean $ScriptChange) 设置脚本是否发生变化
 * @method string getContent() 获取转Base64的代码内容
 * @method void setContent(string $Content) 设置转Base64的代码内容
 */
class UpdateCodeTemplateRequest extends AbstractModel
{
    /**
     * @var string 项目Id
     */
    public $ProjectId;

    /**
     * @var string 模版id
     */
    public $CodeTemplateId;

    /**
     * @var string 模版名	
     */
    public $CodeTemplateName;

    /**
     * @var string 责任人列表
     */
    public $InChargeId;

    /**
     * @var string 责任人名称
     */
    public $InCharge;

    /**
     * @var TaskExtDsVO 扩展属性
     */
    public $Ext;

    /**
     * @var string 执行机ip
     */
    public $BrokerIp;

    /**
     * @var string 资源组id
     */
    public $ResourceGroup;

    /**
     * @var string 模版描述	
     */
    public $CodeTemplateDesc;

    /**
     * @var string 请求来源，WEB 前端；CLIENT 客户端
     */
    public $RequestFromSource;

    /**
     * @var boolean 脚本是否发生变化
     */
    public $ScriptChange;

    /**
     * @var string 转Base64的代码内容
     */
    public $Content;

    /**
     * @param string $ProjectId 项目Id
     * @param string $CodeTemplateId 模版id
     * @param string $CodeTemplateName 模版名	
     * @param string $InChargeId 责任人列表
     * @param string $InCharge 责任人名称
     * @param TaskExtDsVO $Ext 扩展属性
     * @param string $BrokerIp 执行机ip
     * @param string $ResourceGroup 资源组id
     * @param string $CodeTemplateDesc 模版描述	
     * @param string $RequestFromSource 请求来源，WEB 前端；CLIENT 客户端
     * @param boolean $ScriptChange 脚本是否发生变化
     * @param string $Content 转Base64的代码内容
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

        if (array_key_exists("CodeTemplateId",$param) and $param["CodeTemplateId"] !== null) {
            $this->CodeTemplateId = $param["CodeTemplateId"];
        }

        if (array_key_exists("CodeTemplateName",$param) and $param["CodeTemplateName"] !== null) {
            $this->CodeTemplateName = $param["CodeTemplateName"];
        }

        if (array_key_exists("InChargeId",$param) and $param["InChargeId"] !== null) {
            $this->InChargeId = $param["InChargeId"];
        }

        if (array_key_exists("InCharge",$param) and $param["InCharge"] !== null) {
            $this->InCharge = $param["InCharge"];
        }

        if (array_key_exists("Ext",$param) and $param["Ext"] !== null) {
            $this->Ext = new TaskExtDsVO();
            $this->Ext->deserialize($param["Ext"]);
        }

        if (array_key_exists("BrokerIp",$param) and $param["BrokerIp"] !== null) {
            $this->BrokerIp = $param["BrokerIp"];
        }

        if (array_key_exists("ResourceGroup",$param) and $param["ResourceGroup"] !== null) {
            $this->ResourceGroup = $param["ResourceGroup"];
        }

        if (array_key_exists("CodeTemplateDesc",$param) and $param["CodeTemplateDesc"] !== null) {
            $this->CodeTemplateDesc = $param["CodeTemplateDesc"];
        }

        if (array_key_exists("RequestFromSource",$param) and $param["RequestFromSource"] !== null) {
            $this->RequestFromSource = $param["RequestFromSource"];
        }

        if (array_key_exists("ScriptChange",$param) and $param["ScriptChange"] !== null) {
            $this->ScriptChange = $param["ScriptChange"];
        }

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }
    }
}
