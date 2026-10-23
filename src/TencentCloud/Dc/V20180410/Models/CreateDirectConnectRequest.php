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
namespace TencentCloud\Dc\V20180410\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateDirectConnect请求参数结构体
 *
 * @method string getDirectConnectName() 获取<p>物理专线的名称。</p>
 * @method void setDirectConnectName(string $DirectConnectName) 设置<p>物理专线的名称。</p>
 * @method string getAccessPointId() 获取<p>物理专线所在的接入点。<br>您可以通过调用<a href="https://cloud.tencent.com/document/product/216/34827">DescribeAccessPoints</a>接口获取接入点ID。</p>
 * @method void setAccessPointId(string $AccessPointId) 设置<p>物理专线所在的接入点。<br>您可以通过调用<a href="https://cloud.tencent.com/document/product/216/34827">DescribeAccessPoints</a>接口获取接入点ID。</p>
 * @method string getLineOperator() 获取<p>提供接入物理专线的运营商。<br>ChinaTelecom：中国电信；<br>ChinaMobile：中国移动；<br>ChinaUnicom：中国联通；<br> In-houseWiring：楼内线；<br>ChinaOther：中国其他；<br> InternationalOperator：境外其他。</p>
 * @method void setLineOperator(string $LineOperator) 设置<p>提供接入物理专线的运营商。<br>ChinaTelecom：中国电信；<br>ChinaMobile：中国移动；<br>ChinaUnicom：中国联通；<br> In-houseWiring：楼内线；<br>ChinaOther：中国其他；<br> InternationalOperator：境外其他。</p>
 * @method string getPortType() 获取<p>物理专线接入端口类型，取值：<br>100Base-T：百兆电口；<br>1000Base-T（默认值）：千兆电口；<br>1000Base-LX：千兆单模光口（10千米）；<br>10GBase-T：万兆电口；<br>10GBase-LR（默认值）：万兆单模光口（10千米）。</p>
 * @method void setPortType(string $PortType) 设置<p>物理专线接入端口类型，取值：<br>100Base-T：百兆电口；<br>1000Base-T（默认值）：千兆电口；<br>1000Base-LX：千兆单模光口（10千米）；<br>10GBase-T：万兆电口；<br>10GBase-LR（默认值）：万兆单模光口（10千米）。</p>
 * @method string getCircuitCode() 获取<p>运营商或者服务商为物理专线提供的电路编码。</p>
 * @method void setCircuitCode(string $CircuitCode) 设置<p>运营商或者服务商为物理专线提供的电路编码。</p>
 * @method string getLocation() 获取<p>本地数据中心的地理位置。</p>
 * @method void setLocation(string $Location) 设置<p>本地数据中心的地理位置。</p>
 * @method integer getBandwidth() 获取<p>物理专线接入接口带宽，单位为Mbps，默认值为1000，取值范围为 [2, 10240]。</p>
 * @method void setBandwidth(integer $Bandwidth) 设置<p>物理专线接入接口带宽，单位为Mbps，默认值为1000，取值范围为 [2, 10240]。</p>
 * @method string getRedundantDirectConnectId() 获取<p>冗余物理专线的ID。</p>
 * @method void setRedundantDirectConnectId(string $RedundantDirectConnectId) 设置<p>冗余物理专线的ID。</p>
 * @method integer getVlan() 获取<p>物理专线调试VLAN。默认开启VLAN，自动分配VLAN。</p>
 * @method void setVlan(integer $Vlan) 设置<p>物理专线调试VLAN。默认开启VLAN，自动分配VLAN。</p>
 * @method string getTencentAddress() 获取<p>物理专线调试腾讯侧互联 IP。默认自动分配。</p>
 * @method void setTencentAddress(string $TencentAddress) 设置<p>物理专线调试腾讯侧互联 IP。默认自动分配。</p>
 * @method string getCustomerAddress() 获取<p>物理专线调试用户侧互联 IP。默认自动分配。</p>
 * @method void setCustomerAddress(string $CustomerAddress) 设置<p>物理专线调试用户侧互联 IP。默认自动分配。</p>
 * @method string getCustomerName() 获取<p>物理专线申请者姓名。默认从账户体系获取。</p>
 * @method void setCustomerName(string $CustomerName) 设置<p>物理专线申请者姓名。默认从账户体系获取。</p>
 * @method string getCustomerContactMail() 获取<p>物理专线申请者联系邮箱。默认从账户体系获取。</p>
 * @method void setCustomerContactMail(string $CustomerContactMail) 设置<p>物理专线申请者联系邮箱。默认从账户体系获取。</p>
 * @method string getCustomerContactNumber() 获取<p>物理专线申请者联系号码。默认从账户体系获取。</p>
 * @method void setCustomerContactNumber(string $CustomerContactNumber) 设置<p>物理专线申请者联系号码。默认从账户体系获取。</p>
 * @method string getFaultReportContactPerson() 获取<p>报障联系人。</p>
 * @method void setFaultReportContactPerson(string $FaultReportContactPerson) 设置<p>报障联系人。</p>
 * @method string getFaultReportContactNumber() 获取<p>报障联系电话。</p>
 * @method void setFaultReportContactNumber(string $FaultReportContactNumber) 设置<p>报障联系电话。</p>
 * @method string getFaultReportContactEmail() 获取<p>报障联系邮箱。</p>
 * @method void setFaultReportContactEmail(string $FaultReportContactEmail) 设置<p>报障联系邮箱。</p>
 * @method boolean getSignLaw() 获取<p>物理专线申请者是否签署了用户使用协议。默认已签署。</p>
 * @method void setSignLaw(boolean $SignLaw) 设置<p>物理专线申请者是否签署了用户使用协议。默认已签署。</p>
 * @method array getTags() 获取<p>标签键值对</p>
 * @method void setTags(array $Tags) 设置<p>标签键值对</p>
 * @method boolean getIsMacSec() 获取<p>是否MACsec需求</p>
 * @method void setIsMacSec(boolean $IsMacSec) 设置<p>是否MACsec需求</p>
 */
class CreateDirectConnectRequest extends AbstractModel
{
    /**
     * @var string <p>物理专线的名称。</p>
     */
    public $DirectConnectName;

    /**
     * @var string <p>物理专线所在的接入点。<br>您可以通过调用<a href="https://cloud.tencent.com/document/product/216/34827">DescribeAccessPoints</a>接口获取接入点ID。</p>
     */
    public $AccessPointId;

    /**
     * @var string <p>提供接入物理专线的运营商。<br>ChinaTelecom：中国电信；<br>ChinaMobile：中国移动；<br>ChinaUnicom：中国联通；<br> In-houseWiring：楼内线；<br>ChinaOther：中国其他；<br> InternationalOperator：境外其他。</p>
     */
    public $LineOperator;

    /**
     * @var string <p>物理专线接入端口类型，取值：<br>100Base-T：百兆电口；<br>1000Base-T（默认值）：千兆电口；<br>1000Base-LX：千兆单模光口（10千米）；<br>10GBase-T：万兆电口；<br>10GBase-LR（默认值）：万兆单模光口（10千米）。</p>
     */
    public $PortType;

    /**
     * @var string <p>运营商或者服务商为物理专线提供的电路编码。</p>
     */
    public $CircuitCode;

    /**
     * @var string <p>本地数据中心的地理位置。</p>
     */
    public $Location;

    /**
     * @var integer <p>物理专线接入接口带宽，单位为Mbps，默认值为1000，取值范围为 [2, 10240]。</p>
     */
    public $Bandwidth;

    /**
     * @var string <p>冗余物理专线的ID。</p>
     */
    public $RedundantDirectConnectId;

    /**
     * @var integer <p>物理专线调试VLAN。默认开启VLAN，自动分配VLAN。</p>
     */
    public $Vlan;

    /**
     * @var string <p>物理专线调试腾讯侧互联 IP。默认自动分配。</p>
     */
    public $TencentAddress;

    /**
     * @var string <p>物理专线调试用户侧互联 IP。默认自动分配。</p>
     */
    public $CustomerAddress;

    /**
     * @var string <p>物理专线申请者姓名。默认从账户体系获取。</p>
     */
    public $CustomerName;

    /**
     * @var string <p>物理专线申请者联系邮箱。默认从账户体系获取。</p>
     */
    public $CustomerContactMail;

    /**
     * @var string <p>物理专线申请者联系号码。默认从账户体系获取。</p>
     */
    public $CustomerContactNumber;

    /**
     * @var string <p>报障联系人。</p>
     */
    public $FaultReportContactPerson;

    /**
     * @var string <p>报障联系电话。</p>
     */
    public $FaultReportContactNumber;

    /**
     * @var string <p>报障联系邮箱。</p>
     */
    public $FaultReportContactEmail;

    /**
     * @var boolean <p>物理专线申请者是否签署了用户使用协议。默认已签署。</p>
     */
    public $SignLaw;

    /**
     * @var array <p>标签键值对</p>
     */
    public $Tags;

    /**
     * @var boolean <p>是否MACsec需求</p>
     */
    public $IsMacSec;

    /**
     * @param string $DirectConnectName <p>物理专线的名称。</p>
     * @param string $AccessPointId <p>物理专线所在的接入点。<br>您可以通过调用<a href="https://cloud.tencent.com/document/product/216/34827">DescribeAccessPoints</a>接口获取接入点ID。</p>
     * @param string $LineOperator <p>提供接入物理专线的运营商。<br>ChinaTelecom：中国电信；<br>ChinaMobile：中国移动；<br>ChinaUnicom：中国联通；<br> In-houseWiring：楼内线；<br>ChinaOther：中国其他；<br> InternationalOperator：境外其他。</p>
     * @param string $PortType <p>物理专线接入端口类型，取值：<br>100Base-T：百兆电口；<br>1000Base-T（默认值）：千兆电口；<br>1000Base-LX：千兆单模光口（10千米）；<br>10GBase-T：万兆电口；<br>10GBase-LR（默认值）：万兆单模光口（10千米）。</p>
     * @param string $CircuitCode <p>运营商或者服务商为物理专线提供的电路编码。</p>
     * @param string $Location <p>本地数据中心的地理位置。</p>
     * @param integer $Bandwidth <p>物理专线接入接口带宽，单位为Mbps，默认值为1000，取值范围为 [2, 10240]。</p>
     * @param string $RedundantDirectConnectId <p>冗余物理专线的ID。</p>
     * @param integer $Vlan <p>物理专线调试VLAN。默认开启VLAN，自动分配VLAN。</p>
     * @param string $TencentAddress <p>物理专线调试腾讯侧互联 IP。默认自动分配。</p>
     * @param string $CustomerAddress <p>物理专线调试用户侧互联 IP。默认自动分配。</p>
     * @param string $CustomerName <p>物理专线申请者姓名。默认从账户体系获取。</p>
     * @param string $CustomerContactMail <p>物理专线申请者联系邮箱。默认从账户体系获取。</p>
     * @param string $CustomerContactNumber <p>物理专线申请者联系号码。默认从账户体系获取。</p>
     * @param string $FaultReportContactPerson <p>报障联系人。</p>
     * @param string $FaultReportContactNumber <p>报障联系电话。</p>
     * @param string $FaultReportContactEmail <p>报障联系邮箱。</p>
     * @param boolean $SignLaw <p>物理专线申请者是否签署了用户使用协议。默认已签署。</p>
     * @param array $Tags <p>标签键值对</p>
     * @param boolean $IsMacSec <p>是否MACsec需求</p>
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
        if (array_key_exists("DirectConnectName",$param) and $param["DirectConnectName"] !== null) {
            $this->DirectConnectName = $param["DirectConnectName"];
        }

        if (array_key_exists("AccessPointId",$param) and $param["AccessPointId"] !== null) {
            $this->AccessPointId = $param["AccessPointId"];
        }

        if (array_key_exists("LineOperator",$param) and $param["LineOperator"] !== null) {
            $this->LineOperator = $param["LineOperator"];
        }

        if (array_key_exists("PortType",$param) and $param["PortType"] !== null) {
            $this->PortType = $param["PortType"];
        }

        if (array_key_exists("CircuitCode",$param) and $param["CircuitCode"] !== null) {
            $this->CircuitCode = $param["CircuitCode"];
        }

        if (array_key_exists("Location",$param) and $param["Location"] !== null) {
            $this->Location = $param["Location"];
        }

        if (array_key_exists("Bandwidth",$param) and $param["Bandwidth"] !== null) {
            $this->Bandwidth = $param["Bandwidth"];
        }

        if (array_key_exists("RedundantDirectConnectId",$param) and $param["RedundantDirectConnectId"] !== null) {
            $this->RedundantDirectConnectId = $param["RedundantDirectConnectId"];
        }

        if (array_key_exists("Vlan",$param) and $param["Vlan"] !== null) {
            $this->Vlan = $param["Vlan"];
        }

        if (array_key_exists("TencentAddress",$param) and $param["TencentAddress"] !== null) {
            $this->TencentAddress = $param["TencentAddress"];
        }

        if (array_key_exists("CustomerAddress",$param) and $param["CustomerAddress"] !== null) {
            $this->CustomerAddress = $param["CustomerAddress"];
        }

        if (array_key_exists("CustomerName",$param) and $param["CustomerName"] !== null) {
            $this->CustomerName = $param["CustomerName"];
        }

        if (array_key_exists("CustomerContactMail",$param) and $param["CustomerContactMail"] !== null) {
            $this->CustomerContactMail = $param["CustomerContactMail"];
        }

        if (array_key_exists("CustomerContactNumber",$param) and $param["CustomerContactNumber"] !== null) {
            $this->CustomerContactNumber = $param["CustomerContactNumber"];
        }

        if (array_key_exists("FaultReportContactPerson",$param) and $param["FaultReportContactPerson"] !== null) {
            $this->FaultReportContactPerson = $param["FaultReportContactPerson"];
        }

        if (array_key_exists("FaultReportContactNumber",$param) and $param["FaultReportContactNumber"] !== null) {
            $this->FaultReportContactNumber = $param["FaultReportContactNumber"];
        }

        if (array_key_exists("FaultReportContactEmail",$param) and $param["FaultReportContactEmail"] !== null) {
            $this->FaultReportContactEmail = $param["FaultReportContactEmail"];
        }

        if (array_key_exists("SignLaw",$param) and $param["SignLaw"] !== null) {
            $this->SignLaw = $param["SignLaw"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("IsMacSec",$param) and $param["IsMacSec"] !== null) {
            $this->IsMacSec = $param["IsMacSec"];
        }
    }
}
