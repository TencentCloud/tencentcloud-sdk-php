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
namespace TencentCloud\Ess\V20201111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 此结构体(FlowDetailInfo)描述的是合同(流程)的详细信息
 *
 * @method string getFlowId() 获取合同流程ID，为32位字符串。
 * @method void setFlowId(string $FlowId) 设置合同流程ID，为32位字符串。
 * @method string getFlowName() 获取合同流程的名称（可自定义此名称），长度不能超过200，只能由中文、字母、数字和下划线组成。
 * @method void setFlowName(string $FlowName) 设置合同流程的名称（可自定义此名称），长度不能超过200，只能由中文、字母、数字和下划线组成。
 * @method string getFlowType() 获取合同流程的类别分类（如销售合同/入职合同等）。	
 * @method void setFlowType(string $FlowType) 设置合同流程的类别分类（如销售合同/入职合同等）。	
 * @method integer getFlowStatus() 获取合同流程当前的签署状态, 会存在下列的状态值 <ul><li> **0** : 未开启流程(合同中不存在填写环节)</li> <li> **1** : 待签署</li> <li> **2** : 部分签署</li> <li> **3** : 已拒签</li> <li> **4** : 已签署</li> <li> **5** : 已过期</li> <li> **6** : 已撤销</li> <li> **7** : 未开启流程(合同中存在填写环节)</li> <li> **8** : 等待填写</li> <li> **9** : 部分填写</li> <li> **10** : 已拒填</li> <li> **21** : 已解除</li></ul>	
 * @method void setFlowStatus(integer $FlowStatus) 设置合同流程当前的签署状态, 会存在下列的状态值 <ul><li> **0** : 未开启流程(合同中不存在填写环节)</li> <li> **1** : 待签署</li> <li> **2** : 部分签署</li> <li> **3** : 已拒签</li> <li> **4** : 已签署</li> <li> **5** : 已过期</li> <li> **6** : 已撤销</li> <li> **7** : 未开启流程(合同中存在填写环节)</li> <li> **8** : 等待填写</li> <li> **9** : 部分填写</li> <li> **10** : 已拒填</li> <li> **21** : 已解除</li></ul>	
 * @method string getFlowMessage() 获取当合同流程状态为已拒签（即 FlowStatus=3）或已撤销（即 FlowStatus=6）时，此字段 FlowMessage 为拒签或撤销原因。	
 * @method void setFlowMessage(string $FlowMessage) 设置当合同流程状态为已拒签（即 FlowStatus=3）或已撤销（即 FlowStatus=6）时，此字段 FlowMessage 为拒签或撤销原因。	
 * @method string getFlowDescription() 获取合同流程描述信息。	
 * @method void setFlowDescription(string $FlowDescription) 设置合同流程描述信息。	
 * @method integer getCreatedOn() 获取合同流程的创建时间戳，格式为Unix标准时间戳（秒）。	
 * @method void setCreatedOn(integer $CreatedOn) 设置合同流程的创建时间戳，格式为Unix标准时间戳（秒）。	
 * @method array getFlowApproverInfos() 获取合同流程的签署方数组
 * @method void setFlowApproverInfos(array $FlowApproverInfos) 设置合同流程的签署方数组
 * @method array getCcInfos() 获取合同流程的关注方信息数组
 * @method void setCcInfos(array $CcInfos) 设置合同流程的关注方信息数组
 * @method string getCreator() 获取合同流程发起方的员工编号, 即员工在腾讯电子签平台的唯一身份标识。	
 * @method void setCreator(string $Creator) 设置合同流程发起方的员工编号, 即员工在腾讯电子签平台的唯一身份标识。	
 */
class FlowDetailInfo extends AbstractModel
{
    /**
     * @var string 合同流程ID，为32位字符串。
     */
    public $FlowId;

    /**
     * @var string 合同流程的名称（可自定义此名称），长度不能超过200，只能由中文、字母、数字和下划线组成。
     */
    public $FlowName;

    /**
     * @var string 合同流程的类别分类（如销售合同/入职合同等）。	
     */
    public $FlowType;

    /**
     * @var integer 合同流程当前的签署状态, 会存在下列的状态值 <ul><li> **0** : 未开启流程(合同中不存在填写环节)</li> <li> **1** : 待签署</li> <li> **2** : 部分签署</li> <li> **3** : 已拒签</li> <li> **4** : 已签署</li> <li> **5** : 已过期</li> <li> **6** : 已撤销</li> <li> **7** : 未开启流程(合同中存在填写环节)</li> <li> **8** : 等待填写</li> <li> **9** : 部分填写</li> <li> **10** : 已拒填</li> <li> **21** : 已解除</li></ul>	
     */
    public $FlowStatus;

    /**
     * @var string 当合同流程状态为已拒签（即 FlowStatus=3）或已撤销（即 FlowStatus=6）时，此字段 FlowMessage 为拒签或撤销原因。	
     */
    public $FlowMessage;

    /**
     * @var string 合同流程描述信息。	
     */
    public $FlowDescription;

    /**
     * @var integer 合同流程的创建时间戳，格式为Unix标准时间戳（秒）。	
     */
    public $CreatedOn;

    /**
     * @var array 合同流程的签署方数组
     */
    public $FlowApproverInfos;

    /**
     * @var array 合同流程的关注方信息数组
     */
    public $CcInfos;

    /**
     * @var string 合同流程发起方的员工编号, 即员工在腾讯电子签平台的唯一身份标识。	
     */
    public $Creator;

    /**
     * @param string $FlowId 合同流程ID，为32位字符串。
     * @param string $FlowName 合同流程的名称（可自定义此名称），长度不能超过200，只能由中文、字母、数字和下划线组成。
     * @param string $FlowType 合同流程的类别分类（如销售合同/入职合同等）。	
     * @param integer $FlowStatus 合同流程当前的签署状态, 会存在下列的状态值 <ul><li> **0** : 未开启流程(合同中不存在填写环节)</li> <li> **1** : 待签署</li> <li> **2** : 部分签署</li> <li> **3** : 已拒签</li> <li> **4** : 已签署</li> <li> **5** : 已过期</li> <li> **6** : 已撤销</li> <li> **7** : 未开启流程(合同中存在填写环节)</li> <li> **8** : 等待填写</li> <li> **9** : 部分填写</li> <li> **10** : 已拒填</li> <li> **21** : 已解除</li></ul>	
     * @param string $FlowMessage 当合同流程状态为已拒签（即 FlowStatus=3）或已撤销（即 FlowStatus=6）时，此字段 FlowMessage 为拒签或撤销原因。	
     * @param string $FlowDescription 合同流程描述信息。	
     * @param integer $CreatedOn 合同流程的创建时间戳，格式为Unix标准时间戳（秒）。	
     * @param array $FlowApproverInfos 合同流程的签署方数组
     * @param array $CcInfos 合同流程的关注方信息数组
     * @param string $Creator 合同流程发起方的员工编号, 即员工在腾讯电子签平台的唯一身份标识。	
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

        if (array_key_exists("FlowType",$param) and $param["FlowType"] !== null) {
            $this->FlowType = $param["FlowType"];
        }

        if (array_key_exists("FlowStatus",$param) and $param["FlowStatus"] !== null) {
            $this->FlowStatus = $param["FlowStatus"];
        }

        if (array_key_exists("FlowMessage",$param) and $param["FlowMessage"] !== null) {
            $this->FlowMessage = $param["FlowMessage"];
        }

        if (array_key_exists("FlowDescription",$param) and $param["FlowDescription"] !== null) {
            $this->FlowDescription = $param["FlowDescription"];
        }

        if (array_key_exists("CreatedOn",$param) and $param["CreatedOn"] !== null) {
            $this->CreatedOn = $param["CreatedOn"];
        }

        if (array_key_exists("FlowApproverInfos",$param) and $param["FlowApproverInfos"] !== null) {
            $this->FlowApproverInfos = [];
            foreach ($param["FlowApproverInfos"] as $key => $value){
                $obj = new FlowApproverDetail();
                $obj->deserialize($value);
                array_push($this->FlowApproverInfos, $obj);
            }
        }

        if (array_key_exists("CcInfos",$param) and $param["CcInfos"] !== null) {
            $this->CcInfos = [];
            foreach ($param["CcInfos"] as $key => $value){
                $obj = new FlowApproverDetail();
                $obj->deserialize($value);
                array_push($this->CcInfos, $obj);
            }
        }

        if (array_key_exists("Creator",$param) and $param["Creator"] !== null) {
            $this->Creator = $param["Creator"];
        }
    }
}
