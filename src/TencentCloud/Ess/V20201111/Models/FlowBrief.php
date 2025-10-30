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
namespace TencentCloud\Ess\V20201111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 合同流程的基础信息
 *
 * @method string getFlowId() 获取合同流程ID，为32位字符串。
 * @method void setFlowId(string $FlowId) 设置合同流程ID，为32位字符串。
 * @method string getFlowName() 获取合同流程的名称。
 * @method void setFlowName(string $FlowName) 设置合同流程的名称。
 * @method string getFlowDescription() 获取合同流程描述信息。
 * @method void setFlowDescription(string $FlowDescription) 设置合同流程描述信息。
 * @method string getFlowType() 获取合同流程的类别分类（如销售合同/入职合同等）。
该字段将被废弃，不建议使用。	请使用 UserFlowType。
 * @method void setFlowType(string $FlowType) 设置合同流程的类别分类（如销售合同/入职合同等）。
该字段将被废弃，不建议使用。	请使用 UserFlowType。
 * @method integer getFlowStatus() 获取合同流程当前的签署状态, 会存在下列的状态值
<ul><li> **0** : 未开启流程(合同中不存在填写环节)</li>
<li> **1** : 待签署</li>
<li> **2** : 部分签署</li>
<li> **3** : 已拒签</li>
<li> **4** : 已签署</li>
<li> **5** : 已过期</li>
<li> **6** : 已撤销</li>
<li> **7** : 未开启流程(合同中存在填写环节)</li>
<li> **8** : 等待填写</li>
<li> **9** : 部分填写</li>
<li> **10** : 已拒填</li>
<li> **21** : 已解除</li></ul>
 * @method void setFlowStatus(integer $FlowStatus) 设置合同流程当前的签署状态, 会存在下列的状态值
<ul><li> **0** : 未开启流程(合同中不存在填写环节)</li>
<li> **1** : 待签署</li>
<li> **2** : 部分签署</li>
<li> **3** : 已拒签</li>
<li> **4** : 已签署</li>
<li> **5** : 已过期</li>
<li> **6** : 已撤销</li>
<li> **7** : 未开启流程(合同中存在填写环节)</li>
<li> **8** : 等待填写</li>
<li> **9** : 部分填写</li>
<li> **10** : 已拒填</li>
<li> **21** : 已解除</li></ul>
 * @method integer getCreatedOn() 获取合同流程创建时间，格式为Unix标准时间戳（秒）。
 * @method void setCreatedOn(integer $CreatedOn) 设置合同流程创建时间，格式为Unix标准时间戳（秒）。
 * @method string getFlowMessage() 获取当合同流程状态为已拒签（即 FlowStatus=3）或已撤销（即 FlowStatus=6）时，此字段 FlowMessage 为拒签或撤销原因。
 * @method void setFlowMessage(string $FlowMessage) 设置当合同流程状态为已拒签（即 FlowStatus=3）或已撤销（即 FlowStatus=6）时，此字段 FlowMessage 为拒签或撤销原因。
 * @method string getCreator() 获取 合同流程发起方的员工编号, 即员工在腾讯电子签平台的唯一身份标识。
 * @method void setCreator(string $Creator) 设置 合同流程发起方的员工编号, 即员工在腾讯电子签平台的唯一身份标识。
 * @method integer getDeadline() 获取合同流程的签署截止时间，格式为Unix标准时间戳（秒）。
 * @method void setDeadline(integer $Deadline) 设置合同流程的签署截止时间，格式为Unix标准时间戳（秒）。
 * @method UserFlowType getUserFlowType() 获取用户合同的自定义分类。

自定义合同类型的位置，在下图所示地方:
![image](https://qcloudimg.tencent-cloud.cn/raw/00d72934c31bd49115a566e4e1a4530d.png)
 * @method void setUserFlowType(UserFlowType $UserFlowType) 设置用户合同的自定义分类。

自定义合同类型的位置，在下图所示地方:
![image](https://qcloudimg.tencent-cloud.cn/raw/00d72934c31bd49115a566e4e1a4530d.png)
 * @method string getTemplateId() 获取发起模板时,使用的模板Id
 * @method void setTemplateId(string $TemplateId) 设置发起模板时,使用的模板Id
 */
class FlowBrief extends AbstractModel
{
    /**
     * @var string 合同流程ID，为32位字符串。
     */
    public $FlowId;

    /**
     * @var string 合同流程的名称。
     */
    public $FlowName;

    /**
     * @var string 合同流程描述信息。
     */
    public $FlowDescription;

    /**
     * @var string 合同流程的类别分类（如销售合同/入职合同等）。
该字段将被废弃，不建议使用。	请使用 UserFlowType。
     */
    public $FlowType;

    /**
     * @var integer 合同流程当前的签署状态, 会存在下列的状态值
<ul><li> **0** : 未开启流程(合同中不存在填写环节)</li>
<li> **1** : 待签署</li>
<li> **2** : 部分签署</li>
<li> **3** : 已拒签</li>
<li> **4** : 已签署</li>
<li> **5** : 已过期</li>
<li> **6** : 已撤销</li>
<li> **7** : 未开启流程(合同中存在填写环节)</li>
<li> **8** : 等待填写</li>
<li> **9** : 部分填写</li>
<li> **10** : 已拒填</li>
<li> **21** : 已解除</li></ul>
     */
    public $FlowStatus;

    /**
     * @var integer 合同流程创建时间，格式为Unix标准时间戳（秒）。
     */
    public $CreatedOn;

    /**
     * @var string 当合同流程状态为已拒签（即 FlowStatus=3）或已撤销（即 FlowStatus=6）时，此字段 FlowMessage 为拒签或撤销原因。
     */
    public $FlowMessage;

    /**
     * @var string  合同流程发起方的员工编号, 即员工在腾讯电子签平台的唯一身份标识。
     */
    public $Creator;

    /**
     * @var integer 合同流程的签署截止时间，格式为Unix标准时间戳（秒）。
     */
    public $Deadline;

    /**
     * @var UserFlowType 用户合同的自定义分类。

自定义合同类型的位置，在下图所示地方:
![image](https://qcloudimg.tencent-cloud.cn/raw/00d72934c31bd49115a566e4e1a4530d.png)
     */
    public $UserFlowType;

    /**
     * @var string 发起模板时,使用的模板Id
     */
    public $TemplateId;

    /**
     * @param string $FlowId 合同流程ID，为32位字符串。
     * @param string $FlowName 合同流程的名称。
     * @param string $FlowDescription 合同流程描述信息。
     * @param string $FlowType 合同流程的类别分类（如销售合同/入职合同等）。
该字段将被废弃，不建议使用。	请使用 UserFlowType。
     * @param integer $FlowStatus 合同流程当前的签署状态, 会存在下列的状态值
<ul><li> **0** : 未开启流程(合同中不存在填写环节)</li>
<li> **1** : 待签署</li>
<li> **2** : 部分签署</li>
<li> **3** : 已拒签</li>
<li> **4** : 已签署</li>
<li> **5** : 已过期</li>
<li> **6** : 已撤销</li>
<li> **7** : 未开启流程(合同中存在填写环节)</li>
<li> **8** : 等待填写</li>
<li> **9** : 部分填写</li>
<li> **10** : 已拒填</li>
<li> **21** : 已解除</li></ul>
     * @param integer $CreatedOn 合同流程创建时间，格式为Unix标准时间戳（秒）。
     * @param string $FlowMessage 当合同流程状态为已拒签（即 FlowStatus=3）或已撤销（即 FlowStatus=6）时，此字段 FlowMessage 为拒签或撤销原因。
     * @param string $Creator  合同流程发起方的员工编号, 即员工在腾讯电子签平台的唯一身份标识。
     * @param integer $Deadline 合同流程的签署截止时间，格式为Unix标准时间戳（秒）。
     * @param UserFlowType $UserFlowType 用户合同的自定义分类。

自定义合同类型的位置，在下图所示地方:
![image](https://qcloudimg.tencent-cloud.cn/raw/00d72934c31bd49115a566e4e1a4530d.png)
     * @param string $TemplateId 发起模板时,使用的模板Id
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
        if (array_key_exists("FlowId",$param) and $param["FlowId"] !== null) {
            $this->FlowId = $param["FlowId"];
        }

        if (array_key_exists("FlowName",$param) and $param["FlowName"] !== null) {
            $this->FlowName = $param["FlowName"];
        }

        if (array_key_exists("FlowDescription",$param) and $param["FlowDescription"] !== null) {
            $this->FlowDescription = $param["FlowDescription"];
        }

        if (array_key_exists("FlowType",$param) and $param["FlowType"] !== null) {
            $this->FlowType = $param["FlowType"];
        }

        if (array_key_exists("FlowStatus",$param) and $param["FlowStatus"] !== null) {
            $this->FlowStatus = $param["FlowStatus"];
        }

        if (array_key_exists("CreatedOn",$param) and $param["CreatedOn"] !== null) {
            $this->CreatedOn = $param["CreatedOn"];
        }

        if (array_key_exists("FlowMessage",$param) and $param["FlowMessage"] !== null) {
            $this->FlowMessage = $param["FlowMessage"];
        }

        if (array_key_exists("Creator",$param) and $param["Creator"] !== null) {
            $this->Creator = $param["Creator"];
        }

        if (array_key_exists("Deadline",$param) and $param["Deadline"] !== null) {
            $this->Deadline = $param["Deadline"];
        }

        if (array_key_exists("UserFlowType",$param) and $param["UserFlowType"] !== null) {
            $this->UserFlowType = new UserFlowType();
            $this->UserFlowType->deserialize($param["UserFlowType"]);
        }

        if (array_key_exists("TemplateId",$param) and $param["TemplateId"] !== null) {
            $this->TemplateId = $param["TemplateId"];
        }
    }
}
