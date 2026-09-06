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
namespace TencentCloud\Ocr\V20181119\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 增值税发票、购车发票、全电发票的基础要素字段信息。
 *
 * @method string getCode() 获取<p>发票代码</p>
 * @method void setCode(string $Code) 设置<p>发票代码</p>
 * @method string getNumber() 获取<p>发票号码</p>
 * @method void setNumber(string $Number) 设置<p>发票号码</p>
 * @method string getDate() 获取<p>开票日期</p>
 * @method void setDate(string $Date) 设置<p>开票日期</p>
 * @method string getBuyerName() 获取<p>购方抬头<br>通用机打发票类型时不返回</p>
 * @method void setBuyerName(string $BuyerName) 设置<p>购方抬头<br>通用机打发票类型时不返回</p>
 * @method string getBuyerTaxCode() 获取<p>购方税号<br>通用机打发票类型时不返回</p>
 * @method void setBuyerTaxCode(string $BuyerTaxCode) 设置<p>购方税号<br>通用机打发票类型时不返回</p>
 * @method string getBuyerAddressPhone() 获取<p>购方地址电话<br>通用机打发票类型做不返回</p>
 * @method void setBuyerAddressPhone(string $BuyerAddressPhone) 设置<p>购方地址电话<br>通用机打发票类型做不返回</p>
 * @method string getBuyerBankAccount() 获取<p>购方银行账号<br>通用机打发票类型时不返回</p>
 * @method void setBuyerBankAccount(string $BuyerBankAccount) 设置<p>购方银行账号<br>通用机打发票类型时不返回</p>
 * @method string getSellerName() 获取<p>销方名称</p>
 * @method void setSellerName(string $SellerName) 设置<p>销方名称</p>
 * @method string getSellerTaxCode() 获取<p>销方税号</p>
 * @method void setSellerTaxCode(string $SellerTaxCode) 设置<p>销方税号</p>
 * @method string getSellerAddressPhone() 获取<p>销方地址电话</p>
 * @method void setSellerAddressPhone(string $SellerAddressPhone) 设置<p>销方地址电话</p>
 * @method string getSellerBankAccount() 获取<p>销方银行账号</p>
 * @method void setSellerBankAccount(string $SellerBankAccount) 设置<p>销方银行账号</p>
 * @method string getRemark() 获取<p>备注</p>
 * @method void setRemark(string $Remark) 设置<p>备注</p>
 * @method string getMachineNo() 获取<p>机器编码</p>
 * @method void setMachineNo(string $MachineNo) 设置<p>机器编码</p>
 * @method string getType() 获取<p>票种类型<br>01：增值税专用发票，<br>02：货运运输业增值税专用发票，<br>03：机动车销售统一发票，<br>04：增值税普通发票，<br>08：增值税电子专用发票（含全电，全电仅新版接口支持），<br>09：全电发票，<br>0901：全电纸质发票(增值税专用发票)，<br>0903：全电纸质(机动车销售统一发票)，<br>0904：全电纸质发票(增值税普通发票)，<br>0910：电子发票(普通发票)，<br>0915：全电纸质(二手车销售统一发票)，<br>0920：电子发票(增值税专用发票)，<br>0930：电子发票(机动车销售统一发票)，<br>0940：电子发票(二手车销售统一发票)，<br>10：增值税电子普通发票（含全电，全电仅新版接口支持），<br>11：增值税普通发票（卷式），<br>14：增值税电子（通行费）发票，<br>15：二手车销售统一发票，<br>32：深圳区块链发票，<br>61：电子发票（航空运输电子客票行程单），<br>8208：电子发票(通行费发票)，<br>83：电子发票(铁路电子客票)，<br>100：区块链发票，<br>101：财政票据，<br>102：通用电子发票，<br>103：车辆通行费</p>
 * @method void setType(string $Type) 设置<p>票种类型<br>01：增值税专用发票，<br>02：货运运输业增值税专用发票，<br>03：机动车销售统一发票，<br>04：增值税普通发票，<br>08：增值税电子专用发票（含全电，全电仅新版接口支持），<br>09：全电发票，<br>0901：全电纸质发票(增值税专用发票)，<br>0903：全电纸质(机动车销售统一发票)，<br>0904：全电纸质发票(增值税普通发票)，<br>0910：电子发票(普通发票)，<br>0915：全电纸质(二手车销售统一发票)，<br>0920：电子发票(增值税专用发票)，<br>0930：电子发票(机动车销售统一发票)，<br>0940：电子发票(二手车销售统一发票)，<br>10：增值税电子普通发票（含全电，全电仅新版接口支持），<br>11：增值税普通发票（卷式），<br>14：增值税电子（通行费）发票，<br>15：二手车销售统一发票，<br>32：深圳区块链发票，<br>61：电子发票（航空运输电子客票行程单），<br>8208：电子发票(通行费发票)，<br>83：电子发票(铁路电子客票)，<br>100：区块链发票，<br>101：财政票据，<br>102：通用电子发票，<br>103：车辆通行费</p>
 * @method string getElectronicType() 获取<p>具体的全电发票类型：01: 全电专用发票；02：全电普通发票；03：全电火车票；04：全电机票行程单</p>
 * @method void setElectronicType(string $ElectronicType) 设置<p>具体的全电发票类型：01: 全电专用发票；02：全电普通发票；03：全电火车票；04：全电机票行程单</p>
 * @method string getCheckCode() 获取<p>检验码</p>
 * @method void setCheckCode(string $CheckCode) 设置<p>检验码</p>
 * @method string getIsAbandoned() 获取<p>是否作废（红冲）是否作废（红冲）<br>Y：已作废，N：未作废，H：红冲，HP：部分红冲，HF：全额红冲</p>
 * @method void setIsAbandoned(string $IsAbandoned) 设置<p>是否作废（红冲）是否作废（红冲）<br>Y：已作废，N：未作废，H：红冲，HP：部分红冲，HF：全额红冲</p>
 * @method string getHasSellerList() 获取<p>是否有销货清单<br>Y: 有清单 N：无清单<br>卷票无</p>
 * @method void setHasSellerList(string $HasSellerList) 设置<p>是否有销货清单<br>Y: 有清单 N：无清单<br>卷票无</p>
 * @method string getSellerListTitle() 获取<p>销货清单标题</p>
 * @method void setSellerListTitle(string $SellerListTitle) 设置<p>销货清单标题</p>
 * @method string getSellerListTax() 获取<p>销货清单税额</p>
 * @method void setSellerListTax(string $SellerListTax) 设置<p>销货清单税额</p>
 * @method string getAmountWithoutTax() 获取<p>不含税金额</p>
 * @method void setAmountWithoutTax(string $AmountWithoutTax) 设置<p>不含税金额</p>
 * @method string getTaxAmount() 获取<p>税额</p>
 * @method void setTaxAmount(string $TaxAmount) 设置<p>税额</p>
 * @method string getAmountWithTax() 获取<p>含税金额</p>
 * @method void setAmountWithTax(string $AmountWithTax) 设置<p>含税金额</p>
 * @method array getItems() 获取<p>项目明细</p>
 * @method void setItems(array $Items) 设置<p>项目明细</p>
 * @method string getTaxBureau() 获取<p>所属税局</p>
 * @method void setTaxBureau(string $TaxBureau) 设置<p>所属税局</p>
 * @method string getTrafficFreeFlag() 获取<p>通行费标志:Y、是;N、否</p>
 * @method void setTrafficFreeFlag(string $TrafficFreeFlag) 设置<p>通行费标志:Y、是;N、否</p>
 * @method boolean getRedLetterInvoiceMark() 获取<p>是否为红票</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRedLetterInvoiceMark(boolean $RedLetterInvoiceMark) 设置<p>是否为红票</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getIssuingTypeMark() 获取<p>开具类型标识（0: 委托代开，1：自开，2：代开，3：代办退税</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIssuingTypeMark(integer $IssuingTypeMark) 设置<p>开具类型标识（0: 委托代开，1：自开，2：代开，3：代办退税</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSellerAgentName() 获取<p>代开销售方名称</p>
 * @method void setSellerAgentName(string $SellerAgentName) 设置<p>代开销售方名称</p>
 * @method string getSellerAgentTaxID() 获取<p>代开销售方税号</p>
 * @method void setSellerAgentTaxID(string $SellerAgentTaxID) 设置<p>代开销售方税号</p>
 * @method string getRegionCode() 获取<p>地区代码</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRegionCode(string $RegionCode) 设置<p>地区代码</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getReviewerName() 获取<p>复核人</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReviewerName(string $ReviewerName) 设置<p>复核人</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIssuerName() 获取<p>开票人</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIssuerName(string $IssuerName) 设置<p>开票人</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPayeeName() 获取<p>收款人</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPayeeName(string $PayeeName) 设置<p>收款人</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMachineCode() 获取<p>开票机号</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMachineCode(string $MachineCode) 设置<p>开票机号</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTaxControlCode() 获取<p>税控码/密码区</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaxControlCode(string $TaxControlCode) 设置<p>税控码/密码区</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAmountWithTaxCN() 获取<p>价税合计（中文大写）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAmountWithTaxCN(string $AmountWithTaxCN) 设置<p>价税合计（中文大写）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTaxRate() 获取<p>税率</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaxRate(string $TaxRate) 设置<p>税率</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSpecialTicketCode() 获取<p>特殊票种代码</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSpecialTicketCode(string $SpecialTicketCode) 设置<p>特殊票种代码</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getRedLetterInvoices() 获取<p>红字发票信息列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRedLetterInvoices(array $RedLetterInvoices) 设置<p>红字发票信息列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFullElectronicType() 获取<p>全电类型</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFullElectronicType(string $FullElectronicType) 设置<p>全电类型</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOfdUrl() 获取<p>OFD版式文件下载链接</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOfdUrl(string $OfdUrl) 设置<p>OFD版式文件下载链接</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPdfUrl() 获取<p>PDF版式文件下载链接</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPdfUrl(string $PdfUrl) 设置<p>PDF版式文件下载链接</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOriginalCode() 获取<p>原发票代码，对应蓝字发票代码。</p>
 * @method void setOriginalCode(string $OriginalCode) 设置<p>原发票代码，对应蓝字发票代码。</p>
 * @method string getOriginalNumber() 获取<p>原发票号码，对应蓝字发票号码。</p>
 * @method void setOriginalNumber(string $OriginalNumber) 设置<p>原发票号码，对应蓝字发票号码。</p>
 */
class VatInvoice extends AbstractModel
{
    /**
     * @var string <p>发票代码</p>
     */
    public $Code;

    /**
     * @var string <p>发票号码</p>
     */
    public $Number;

    /**
     * @var string <p>开票日期</p>
     */
    public $Date;

    /**
     * @var string <p>购方抬头<br>通用机打发票类型时不返回</p>
     */
    public $BuyerName;

    /**
     * @var string <p>购方税号<br>通用机打发票类型时不返回</p>
     */
    public $BuyerTaxCode;

    /**
     * @var string <p>购方地址电话<br>通用机打发票类型做不返回</p>
     */
    public $BuyerAddressPhone;

    /**
     * @var string <p>购方银行账号<br>通用机打发票类型时不返回</p>
     */
    public $BuyerBankAccount;

    /**
     * @var string <p>销方名称</p>
     */
    public $SellerName;

    /**
     * @var string <p>销方税号</p>
     */
    public $SellerTaxCode;

    /**
     * @var string <p>销方地址电话</p>
     */
    public $SellerAddressPhone;

    /**
     * @var string <p>销方银行账号</p>
     */
    public $SellerBankAccount;

    /**
     * @var string <p>备注</p>
     */
    public $Remark;

    /**
     * @var string <p>机器编码</p>
     */
    public $MachineNo;

    /**
     * @var string <p>票种类型<br>01：增值税专用发票，<br>02：货运运输业增值税专用发票，<br>03：机动车销售统一发票，<br>04：增值税普通发票，<br>08：增值税电子专用发票（含全电，全电仅新版接口支持），<br>09：全电发票，<br>0901：全电纸质发票(增值税专用发票)，<br>0903：全电纸质(机动车销售统一发票)，<br>0904：全电纸质发票(增值税普通发票)，<br>0910：电子发票(普通发票)，<br>0915：全电纸质(二手车销售统一发票)，<br>0920：电子发票(增值税专用发票)，<br>0930：电子发票(机动车销售统一发票)，<br>0940：电子发票(二手车销售统一发票)，<br>10：增值税电子普通发票（含全电，全电仅新版接口支持），<br>11：增值税普通发票（卷式），<br>14：增值税电子（通行费）发票，<br>15：二手车销售统一发票，<br>32：深圳区块链发票，<br>61：电子发票（航空运输电子客票行程单），<br>8208：电子发票(通行费发票)，<br>83：电子发票(铁路电子客票)，<br>100：区块链发票，<br>101：财政票据，<br>102：通用电子发票，<br>103：车辆通行费</p>
     */
    public $Type;

    /**
     * @var string <p>具体的全电发票类型：01: 全电专用发票；02：全电普通发票；03：全电火车票；04：全电机票行程单</p>
     */
    public $ElectronicType;

    /**
     * @var string <p>检验码</p>
     */
    public $CheckCode;

    /**
     * @var string <p>是否作废（红冲）是否作废（红冲）<br>Y：已作废，N：未作废，H：红冲，HP：部分红冲，HF：全额红冲</p>
     */
    public $IsAbandoned;

    /**
     * @var string <p>是否有销货清单<br>Y: 有清单 N：无清单<br>卷票无</p>
     */
    public $HasSellerList;

    /**
     * @var string <p>销货清单标题</p>
     */
    public $SellerListTitle;

    /**
     * @var string <p>销货清单税额</p>
     */
    public $SellerListTax;

    /**
     * @var string <p>不含税金额</p>
     */
    public $AmountWithoutTax;

    /**
     * @var string <p>税额</p>
     */
    public $TaxAmount;

    /**
     * @var string <p>含税金额</p>
     */
    public $AmountWithTax;

    /**
     * @var array <p>项目明细</p>
     */
    public $Items;

    /**
     * @var string <p>所属税局</p>
     */
    public $TaxBureau;

    /**
     * @var string <p>通行费标志:Y、是;N、否</p>
     */
    public $TrafficFreeFlag;

    /**
     * @var boolean <p>是否为红票</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RedLetterInvoiceMark;

    /**
     * @var integer <p>开具类型标识（0: 委托代开，1：自开，2：代开，3：代办退税</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IssuingTypeMark;

    /**
     * @var string <p>代开销售方名称</p>
     */
    public $SellerAgentName;

    /**
     * @var string <p>代开销售方税号</p>
     */
    public $SellerAgentTaxID;

    /**
     * @var string <p>地区代码</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RegionCode;

    /**
     * @var string <p>复核人</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ReviewerName;

    /**
     * @var string <p>开票人</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IssuerName;

    /**
     * @var string <p>收款人</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PayeeName;

    /**
     * @var string <p>开票机号</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MachineCode;

    /**
     * @var string <p>税控码/密码区</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaxControlCode;

    /**
     * @var string <p>价税合计（中文大写）</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AmountWithTaxCN;

    /**
     * @var string <p>税率</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaxRate;

    /**
     * @var string <p>特殊票种代码</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SpecialTicketCode;

    /**
     * @var array <p>红字发票信息列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RedLetterInvoices;

    /**
     * @var string <p>全电类型</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FullElectronicType;

    /**
     * @var string <p>OFD版式文件下载链接</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OfdUrl;

    /**
     * @var string <p>PDF版式文件下载链接</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PdfUrl;

    /**
     * @var string <p>原发票代码，对应蓝字发票代码。</p>
     */
    public $OriginalCode;

    /**
     * @var string <p>原发票号码，对应蓝字发票号码。</p>
     */
    public $OriginalNumber;

    /**
     * @param string $Code <p>发票代码</p>
     * @param string $Number <p>发票号码</p>
     * @param string $Date <p>开票日期</p>
     * @param string $BuyerName <p>购方抬头<br>通用机打发票类型时不返回</p>
     * @param string $BuyerTaxCode <p>购方税号<br>通用机打发票类型时不返回</p>
     * @param string $BuyerAddressPhone <p>购方地址电话<br>通用机打发票类型做不返回</p>
     * @param string $BuyerBankAccount <p>购方银行账号<br>通用机打发票类型时不返回</p>
     * @param string $SellerName <p>销方名称</p>
     * @param string $SellerTaxCode <p>销方税号</p>
     * @param string $SellerAddressPhone <p>销方地址电话</p>
     * @param string $SellerBankAccount <p>销方银行账号</p>
     * @param string $Remark <p>备注</p>
     * @param string $MachineNo <p>机器编码</p>
     * @param string $Type <p>票种类型<br>01：增值税专用发票，<br>02：货运运输业增值税专用发票，<br>03：机动车销售统一发票，<br>04：增值税普通发票，<br>08：增值税电子专用发票（含全电，全电仅新版接口支持），<br>09：全电发票，<br>0901：全电纸质发票(增值税专用发票)，<br>0903：全电纸质(机动车销售统一发票)，<br>0904：全电纸质发票(增值税普通发票)，<br>0910：电子发票(普通发票)，<br>0915：全电纸质(二手车销售统一发票)，<br>0920：电子发票(增值税专用发票)，<br>0930：电子发票(机动车销售统一发票)，<br>0940：电子发票(二手车销售统一发票)，<br>10：增值税电子普通发票（含全电，全电仅新版接口支持），<br>11：增值税普通发票（卷式），<br>14：增值税电子（通行费）发票，<br>15：二手车销售统一发票，<br>32：深圳区块链发票，<br>61：电子发票（航空运输电子客票行程单），<br>8208：电子发票(通行费发票)，<br>83：电子发票(铁路电子客票)，<br>100：区块链发票，<br>101：财政票据，<br>102：通用电子发票，<br>103：车辆通行费</p>
     * @param string $ElectronicType <p>具体的全电发票类型：01: 全电专用发票；02：全电普通发票；03：全电火车票；04：全电机票行程单</p>
     * @param string $CheckCode <p>检验码</p>
     * @param string $IsAbandoned <p>是否作废（红冲）是否作废（红冲）<br>Y：已作废，N：未作废，H：红冲，HP：部分红冲，HF：全额红冲</p>
     * @param string $HasSellerList <p>是否有销货清单<br>Y: 有清单 N：无清单<br>卷票无</p>
     * @param string $SellerListTitle <p>销货清单标题</p>
     * @param string $SellerListTax <p>销货清单税额</p>
     * @param string $AmountWithoutTax <p>不含税金额</p>
     * @param string $TaxAmount <p>税额</p>
     * @param string $AmountWithTax <p>含税金额</p>
     * @param array $Items <p>项目明细</p>
     * @param string $TaxBureau <p>所属税局</p>
     * @param string $TrafficFreeFlag <p>通行费标志:Y、是;N、否</p>
     * @param boolean $RedLetterInvoiceMark <p>是否为红票</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $IssuingTypeMark <p>开具类型标识（0: 委托代开，1：自开，2：代开，3：代办退税</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SellerAgentName <p>代开销售方名称</p>
     * @param string $SellerAgentTaxID <p>代开销售方税号</p>
     * @param string $RegionCode <p>地区代码</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ReviewerName <p>复核人</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $IssuerName <p>开票人</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PayeeName <p>收款人</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MachineCode <p>开票机号</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TaxControlCode <p>税控码/密码区</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AmountWithTaxCN <p>价税合计（中文大写）</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TaxRate <p>税率</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SpecialTicketCode <p>特殊票种代码</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $RedLetterInvoices <p>红字发票信息列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FullElectronicType <p>全电类型</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OfdUrl <p>OFD版式文件下载链接</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PdfUrl <p>PDF版式文件下载链接</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OriginalCode <p>原发票代码，对应蓝字发票代码。</p>
     * @param string $OriginalNumber <p>原发票号码，对应蓝字发票号码。</p>
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
        if (array_key_exists("Code",$param) and $param["Code"] !== null) {
            $this->Code = $param["Code"];
        }

        if (array_key_exists("Number",$param) and $param["Number"] !== null) {
            $this->Number = $param["Number"];
        }

        if (array_key_exists("Date",$param) and $param["Date"] !== null) {
            $this->Date = $param["Date"];
        }

        if (array_key_exists("BuyerName",$param) and $param["BuyerName"] !== null) {
            $this->BuyerName = $param["BuyerName"];
        }

        if (array_key_exists("BuyerTaxCode",$param) and $param["BuyerTaxCode"] !== null) {
            $this->BuyerTaxCode = $param["BuyerTaxCode"];
        }

        if (array_key_exists("BuyerAddressPhone",$param) and $param["BuyerAddressPhone"] !== null) {
            $this->BuyerAddressPhone = $param["BuyerAddressPhone"];
        }

        if (array_key_exists("BuyerBankAccount",$param) and $param["BuyerBankAccount"] !== null) {
            $this->BuyerBankAccount = $param["BuyerBankAccount"];
        }

        if (array_key_exists("SellerName",$param) and $param["SellerName"] !== null) {
            $this->SellerName = $param["SellerName"];
        }

        if (array_key_exists("SellerTaxCode",$param) and $param["SellerTaxCode"] !== null) {
            $this->SellerTaxCode = $param["SellerTaxCode"];
        }

        if (array_key_exists("SellerAddressPhone",$param) and $param["SellerAddressPhone"] !== null) {
            $this->SellerAddressPhone = $param["SellerAddressPhone"];
        }

        if (array_key_exists("SellerBankAccount",$param) and $param["SellerBankAccount"] !== null) {
            $this->SellerBankAccount = $param["SellerBankAccount"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("MachineNo",$param) and $param["MachineNo"] !== null) {
            $this->MachineNo = $param["MachineNo"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("ElectronicType",$param) and $param["ElectronicType"] !== null) {
            $this->ElectronicType = $param["ElectronicType"];
        }

        if (array_key_exists("CheckCode",$param) and $param["CheckCode"] !== null) {
            $this->CheckCode = $param["CheckCode"];
        }

        if (array_key_exists("IsAbandoned",$param) and $param["IsAbandoned"] !== null) {
            $this->IsAbandoned = $param["IsAbandoned"];
        }

        if (array_key_exists("HasSellerList",$param) and $param["HasSellerList"] !== null) {
            $this->HasSellerList = $param["HasSellerList"];
        }

        if (array_key_exists("SellerListTitle",$param) and $param["SellerListTitle"] !== null) {
            $this->SellerListTitle = $param["SellerListTitle"];
        }

        if (array_key_exists("SellerListTax",$param) and $param["SellerListTax"] !== null) {
            $this->SellerListTax = $param["SellerListTax"];
        }

        if (array_key_exists("AmountWithoutTax",$param) and $param["AmountWithoutTax"] !== null) {
            $this->AmountWithoutTax = $param["AmountWithoutTax"];
        }

        if (array_key_exists("TaxAmount",$param) and $param["TaxAmount"] !== null) {
            $this->TaxAmount = $param["TaxAmount"];
        }

        if (array_key_exists("AmountWithTax",$param) and $param["AmountWithTax"] !== null) {
            $this->AmountWithTax = $param["AmountWithTax"];
        }

        if (array_key_exists("Items",$param) and $param["Items"] !== null) {
            $this->Items = [];
            foreach ($param["Items"] as $key => $value){
                $obj = new VatInvoiceItem();
                $obj->deserialize($value);
                array_push($this->Items, $obj);
            }
        }

        if (array_key_exists("TaxBureau",$param) and $param["TaxBureau"] !== null) {
            $this->TaxBureau = $param["TaxBureau"];
        }

        if (array_key_exists("TrafficFreeFlag",$param) and $param["TrafficFreeFlag"] !== null) {
            $this->TrafficFreeFlag = $param["TrafficFreeFlag"];
        }

        if (array_key_exists("RedLetterInvoiceMark",$param) and $param["RedLetterInvoiceMark"] !== null) {
            $this->RedLetterInvoiceMark = $param["RedLetterInvoiceMark"];
        }

        if (array_key_exists("IssuingTypeMark",$param) and $param["IssuingTypeMark"] !== null) {
            $this->IssuingTypeMark = $param["IssuingTypeMark"];
        }

        if (array_key_exists("SellerAgentName",$param) and $param["SellerAgentName"] !== null) {
            $this->SellerAgentName = $param["SellerAgentName"];
        }

        if (array_key_exists("SellerAgentTaxID",$param) and $param["SellerAgentTaxID"] !== null) {
            $this->SellerAgentTaxID = $param["SellerAgentTaxID"];
        }

        if (array_key_exists("RegionCode",$param) and $param["RegionCode"] !== null) {
            $this->RegionCode = $param["RegionCode"];
        }

        if (array_key_exists("ReviewerName",$param) and $param["ReviewerName"] !== null) {
            $this->ReviewerName = $param["ReviewerName"];
        }

        if (array_key_exists("IssuerName",$param) and $param["IssuerName"] !== null) {
            $this->IssuerName = $param["IssuerName"];
        }

        if (array_key_exists("PayeeName",$param) and $param["PayeeName"] !== null) {
            $this->PayeeName = $param["PayeeName"];
        }

        if (array_key_exists("MachineCode",$param) and $param["MachineCode"] !== null) {
            $this->MachineCode = $param["MachineCode"];
        }

        if (array_key_exists("TaxControlCode",$param) and $param["TaxControlCode"] !== null) {
            $this->TaxControlCode = $param["TaxControlCode"];
        }

        if (array_key_exists("AmountWithTaxCN",$param) and $param["AmountWithTaxCN"] !== null) {
            $this->AmountWithTaxCN = $param["AmountWithTaxCN"];
        }

        if (array_key_exists("TaxRate",$param) and $param["TaxRate"] !== null) {
            $this->TaxRate = $param["TaxRate"];
        }

        if (array_key_exists("SpecialTicketCode",$param) and $param["SpecialTicketCode"] !== null) {
            $this->SpecialTicketCode = $param["SpecialTicketCode"];
        }

        if (array_key_exists("RedLetterInvoices",$param) and $param["RedLetterInvoices"] !== null) {
            $this->RedLetterInvoices = [];
            foreach ($param["RedLetterInvoices"] as $key => $value){
                $obj = new RedLetterInvoiceItem();
                $obj->deserialize($value);
                array_push($this->RedLetterInvoices, $obj);
            }
        }

        if (array_key_exists("FullElectronicType",$param) and $param["FullElectronicType"] !== null) {
            $this->FullElectronicType = $param["FullElectronicType"];
        }

        if (array_key_exists("OfdUrl",$param) and $param["OfdUrl"] !== null) {
            $this->OfdUrl = $param["OfdUrl"];
        }

        if (array_key_exists("PdfUrl",$param) and $param["PdfUrl"] !== null) {
            $this->PdfUrl = $param["PdfUrl"];
        }

        if (array_key_exists("OriginalCode",$param) and $param["OriginalCode"] !== null) {
            $this->OriginalCode = $param["OriginalCode"];
        }

        if (array_key_exists("OriginalNumber",$param) and $param["OriginalNumber"] !== null) {
            $this->OriginalNumber = $param["OriginalNumber"];
        }
    }
}
