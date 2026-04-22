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
 * 此结构体(FlowDetailInfo)描述的是合同(流程)的详细信息
 *
 * @method string getFlowId() 获取<p>合同流程ID，为32位字符串。</p>
 * @method void setFlowId(string $FlowId) 设置<p>合同流程ID，为32位字符串。</p>
 * @method string getFlowName() 获取<p>合同流程的名称（可自定义此名称），长度不能超过200，只能由中文、字母、数字和下划线组成。</p>
 * @method void setFlowName(string $FlowName) 设置<p>合同流程的名称（可自定义此名称），长度不能超过200，只能由中文、字母、数字和下划线组成。</p>
 * @method string getFlowType() 获取<p>合同流程的类别分类（如销售合同/入职合同等）。<br>该字段将被废弃，不建议使用。</p>
 * @method void setFlowType(string $FlowType) 设置<p>合同流程的类别分类（如销售合同/入职合同等）。<br>该字段将被废弃，不建议使用。</p>
 * @method integer getFlowStatus() 获取<p>合同流程当前的签署状态, 会存在下列的状态值 </p><ul><li> **0** : 未开启流程(合同中不存在填写环节)</li> <li> **1** : 待签署</li> <li> **2** : 部分签署</li> <li> **3** : 已拒签</li> <li> **4** : 已签署</li> <li> **5** : 已过期</li> <li> **6** : 已撤销</li> <li> **7** : 未开启流程(合同中存在填写环节)</li> <li> **8** : 等待填写</li> <li> **9** : 部分填写</li> <li> **10** : 已拒填</li> <li> **16** : 已失效（可能因为参与方修改姓名等原因）</li> <li> **21** : 已解除</li></ul>
 * @method void setFlowStatus(integer $FlowStatus) 设置<p>合同流程当前的签署状态, 会存在下列的状态值 </p><ul><li> **0** : 未开启流程(合同中不存在填写环节)</li> <li> **1** : 待签署</li> <li> **2** : 部分签署</li> <li> **3** : 已拒签</li> <li> **4** : 已签署</li> <li> **5** : 已过期</li> <li> **6** : 已撤销</li> <li> **7** : 未开启流程(合同中存在填写环节)</li> <li> **8** : 等待填写</li> <li> **9** : 部分填写</li> <li> **10** : 已拒填</li> <li> **16** : 已失效（可能因为参与方修改姓名等原因）</li> <li> **21** : 已解除</li></ul>
 * @method string getFlowMessage() 获取<p>当合同流程状态为已拒签（即 FlowStatus=3）或已撤销（即 FlowStatus=6）时，此字段 FlowMessage 为拒签或撤销原因。</p>
 * @method void setFlowMessage(string $FlowMessage) 设置<p>当合同流程状态为已拒签（即 FlowStatus=3）或已撤销（即 FlowStatus=6）时，此字段 FlowMessage 为拒签或撤销原因。</p>
 * @method string getFlowDescription() 获取<p>合同流程描述信息。</p>
 * @method void setFlowDescription(string $FlowDescription) 设置<p>合同流程描述信息。</p>
 * @method integer getCreatedOn() 获取<p>合同流程的创建时间戳，格式为Unix标准时间戳（秒）。</p>
 * @method void setCreatedOn(integer $CreatedOn) 设置<p>合同流程的创建时间戳，格式为Unix标准时间戳（秒）。</p>
 * @method array getFlowApproverInfos() 获取<p>合同流程的签署方数组</p>
 * @method void setFlowApproverInfos(array $FlowApproverInfos) 设置<p>合同流程的签署方数组</p>
 * @method array getCcInfos() 获取<p>合同流程的关注方信息数组</p>
 * @method void setCcInfos(array $CcInfos) 设置<p>合同流程的关注方信息数组</p>
 * @method string getCreator() 获取<p>合同流程发起方的员工编号, 即员工在腾讯电子签平台的唯一身份标识。</p>
 * @method void setCreator(string $Creator) 设置<p>合同流程发起方的员工编号, 即员工在腾讯电子签平台的唯一身份标识。</p>
 * @method UserFlowType getUserFlowType() 获取<p>用户合同的自定义分类。</p><p>自定义合同类型的位置，在下图所示地方:<br><img src="https://qcloudimg.tencent-cloud.cn/raw/00d72934c31bd49115a566e4e1a4530d.png" alt="image"></p>
 * @method void setUserFlowType(UserFlowType $UserFlowType) 设置<p>用户合同的自定义分类。</p><p>自定义合同类型的位置，在下图所示地方:<br><img src="https://qcloudimg.tencent-cloud.cn/raw/00d72934c31bd49115a566e4e1a4530d.png" alt="image"></p>
 * @method string getTemplateId() 获取<p>发起模板时,使用的模板Id</p>
 * @method void setTemplateId(string $TemplateId) 设置<p>发起模板时,使用的模板Id</p>
 * @method array getFlowRemarks() 获取<p>合同备注列表</p>
 * @method void setFlowRemarks(array $FlowRemarks) 设置<p>合同备注列表</p>
 */
class FlowDetailInfo extends AbstractModel
{
    /**
     * @var string <p>合同流程ID，为32位字符串。</p>
     */
    public $FlowId;

    /**
     * @var string <p>合同流程的名称（可自定义此名称），长度不能超过200，只能由中文、字母、数字和下划线组成。</p>
     */
    public $FlowName;

    /**
     * @var string <p>合同流程的类别分类（如销售合同/入职合同等）。<br>该字段将被废弃，不建议使用。</p>
     */
    public $FlowType;

    /**
     * @var integer <p>合同流程当前的签署状态, 会存在下列的状态值 </p><ul><li> **0** : 未开启流程(合同中不存在填写环节)</li> <li> **1** : 待签署</li> <li> **2** : 部分签署</li> <li> **3** : 已拒签</li> <li> **4** : 已签署</li> <li> **5** : 已过期</li> <li> **6** : 已撤销</li> <li> **7** : 未开启流程(合同中存在填写环节)</li> <li> **8** : 等待填写</li> <li> **9** : 部分填写</li> <li> **10** : 已拒填</li> <li> **16** : 已失效（可能因为参与方修改姓名等原因）</li> <li> **21** : 已解除</li></ul>
     */
    public $FlowStatus;

    /**
     * @var string <p>当合同流程状态为已拒签（即 FlowStatus=3）或已撤销（即 FlowStatus=6）时，此字段 FlowMessage 为拒签或撤销原因。</p>
     */
    public $FlowMessage;

    /**
     * @var string <p>合同流程描述信息。</p>
     */
    public $FlowDescription;

    /**
     * @var integer <p>合同流程的创建时间戳，格式为Unix标准时间戳（秒）。</p>
     */
    public $CreatedOn;

    /**
     * @var array <p>合同流程的签署方数组</p>
     */
    public $FlowApproverInfos;

    /**
     * @var array <p>合同流程的关注方信息数组</p>
     */
    public $CcInfos;

    /**
     * @var string <p>合同流程发起方的员工编号, 即员工在腾讯电子签平台的唯一身份标识。</p>
     */
    public $Creator;

    /**
     * @var UserFlowType <p>用户合同的自定义分类。</p><p>自定义合同类型的位置，在下图所示地方:<br><img src="https://qcloudimg.tencent-cloud.cn/raw/00d72934c31bd49115a566e4e1a4530d.png" alt="image"></p>
     */
    public $UserFlowType;

    /**
     * @var string <p>发起模板时,使用的模板Id</p>
     */
    public $TemplateId;

    /**
     * @var array <p>合同备注列表</p>
     */
    public $FlowRemarks;

    /**
     * @param string $FlowId <p>合同流程ID，为32位字符串。</p>
     * @param string $FlowName <p>合同流程的名称（可自定义此名称），长度不能超过200，只能由中文、字母、数字和下划线组成。</p>
     * @param string $FlowType <p>合同流程的类别分类（如销售合同/入职合同等）。<br>该字段将被废弃，不建议使用。</p>
     * @param integer $FlowStatus <p>合同流程当前的签署状态, 会存在下列的状态值 </p><ul><li> **0** : 未开启流程(合同中不存在填写环节)</li> <li> **1** : 待签署</li> <li> **2** : 部分签署</li> <li> **3** : 已拒签</li> <li> **4** : 已签署</li> <li> **5** : 已过期</li> <li> **6** : 已撤销</li> <li> **7** : 未开启流程(合同中存在填写环节)</li> <li> **8** : 等待填写</li> <li> **9** : 部分填写</li> <li> **10** : 已拒填</li> <li> **16** : 已失效（可能因为参与方修改姓名等原因）</li> <li> **21** : 已解除</li></ul>
     * @param string $FlowMessage <p>当合同流程状态为已拒签（即 FlowStatus=3）或已撤销（即 FlowStatus=6）时，此字段 FlowMessage 为拒签或撤销原因。</p>
     * @param string $FlowDescription <p>合同流程描述信息。</p>
     * @param integer $CreatedOn <p>合同流程的创建时间戳，格式为Unix标准时间戳（秒）。</p>
     * @param array $FlowApproverInfos <p>合同流程的签署方数组</p>
     * @param array $CcInfos <p>合同流程的关注方信息数组</p>
     * @param string $Creator <p>合同流程发起方的员工编号, 即员工在腾讯电子签平台的唯一身份标识。</p>
     * @param UserFlowType $UserFlowType <p>用户合同的自定义分类。</p><p>自定义合同类型的位置，在下图所示地方:<br><img src="https://qcloudimg.tencent-cloud.cn/raw/00d72934c31bd49115a566e4e1a4530d.png" alt="image"></p>
     * @param string $TemplateId <p>发起模板时,使用的模板Id</p>
     * @param array $FlowRemarks <p>合同备注列表</p>
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

        if (array_key_exists("UserFlowType",$param) and $param["UserFlowType"] !== null) {
            $this->UserFlowType = new UserFlowType();
            $this->UserFlowType->deserialize($param["UserFlowType"]);
        }

        if (array_key_exists("TemplateId",$param) and $param["TemplateId"] !== null) {
            $this->TemplateId = $param["TemplateId"];
        }

        if (array_key_exists("FlowRemarks",$param) and $param["FlowRemarks"] !== null) {
            $this->FlowRemarks = $param["FlowRemarks"];
        }
    }
}
