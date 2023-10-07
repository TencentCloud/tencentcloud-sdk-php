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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 产品明细
 *
 * @method integer getTimeSpan() 获取时间间隔
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTimeSpan(integer $TimeSpan) 设置时间间隔
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTimeUnit() 获取单位，支持购买d、m、y 即（日、月、年）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTimeUnit(string $TimeUnit) 设置单位，支持购买d、m、y 即（日、月、年）
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSubProductCode() 获取子产品标签,。新购，续费必传，变配时放在oldConfig newConfig里面

Saas 高级版 ：sp_wsm_waf_premium
Saas企业版 ：sp_wsm_waf_enterprise
Saas旗舰版 ：sp_wsm_waf_ultimate
Saas 业务扩展包：sp_wsm_waf_qpsep
Saas 域名扩展包：sp_wsm_waf_domain

高级版-CLB:sp_wsm_waf_premium_clb
企业版-CLB : sp_wsm_waf_enterprise_clb
旗舰版-CLB:sp_wsm_waf_ultimate_clb
 业务扩展包-CLB：sp_wsm_waf_qpsep_clb
域名扩展包-CLB：sp_wsm_waf_domain_clb

注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubProductCode(string $SubProductCode) 设置子产品标签,。新购，续费必传，变配时放在oldConfig newConfig里面

Saas 高级版 ：sp_wsm_waf_premium
Saas企业版 ：sp_wsm_waf_enterprise
Saas旗舰版 ：sp_wsm_waf_ultimate
Saas 业务扩展包：sp_wsm_waf_qpsep
Saas 域名扩展包：sp_wsm_waf_domain

高级版-CLB:sp_wsm_waf_premium_clb
企业版-CLB : sp_wsm_waf_enterprise_clb
旗舰版-CLB:sp_wsm_waf_ultimate_clb
 业务扩展包-CLB：sp_wsm_waf_qpsep_clb
域名扩展包-CLB：sp_wsm_waf_domain_clb

注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getPid() 获取业务产品申请的pid（对应一个定价公式），通过pid计费查询到定价模型
高级版 ：1000827
企业版 ：1000830
旗舰版 ：1000832
域名包 : 1000834
业务扩展包 : 1000481
高级版-CLB:1001150
企业版-CLB : 1001152
旗舰版-CLB:1001154
域名包-CLB: 1001156
业务扩展包-CLB : 1001160

注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPid(integer $Pid) 设置业务产品申请的pid（对应一个定价公式），通过pid计费查询到定价模型
高级版 ：1000827
企业版 ：1000830
旗舰版 ：1000832
域名包 : 1000834
业务扩展包 : 1000481
高级版-CLB:1001150
企业版-CLB : 1001152
旗舰版-CLB:1001154
域名包-CLB: 1001156
业务扩展包-CLB : 1001160

注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInstanceName() 获取waf实例名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceName(string $InstanceName) 设置waf实例名
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getAutoRenewFlag() 获取1:自动续费，0:不自动续费
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAutoRenewFlag(integer $AutoRenewFlag) 设置1:自动续费，0:不自动续费
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRealRegion() 获取waf购买的实际地域信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRealRegion(integer $RealRegion) 设置waf购买的实际地域信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getLabelTypes() 获取计费细项标签数组
Saas 高级版  sv_wsm_waf_package_premium 
Saas 企业版  sv_wsm_waf_package_enterprise
Saas 旗舰版  sv_wsm_waf_package_ultimate 
Saas 非中国大陆高级版  sv_wsm_waf_package_premium_intl
Saas 非中国大陆企业版   sv_wsm_waf_package_enterprise_intl
Saas 非中国大陆旗舰版  sv_wsm_waf_package_ultimate _intl
Saas 业务扩展包  sv_wsm_waf_qps_ep
Saas 域名扩展包  sv_wsm_waf_domain

高级版CLB   sv_wsm_waf_package_premium_clb
企业版CLB  sv_wsm_waf_package_enterprise_clb
旗舰版CLB   sv_wsm_waf_package_ultimate_clb
非中国大陆高级版 CLB sv_wsm_waf_package_premium_clb_intl
非中国大陆企业版CLB   sv_wsm_waf_package_premium_clb_intl
非中国大陆旗舰版CLB  sv_wsm_waf_package_ultimate_clb _intl
业务扩展包CLB sv_wsm_waf_qps_ep_clb
域名扩展包CLB  sv_wsm_waf_domain_clb

注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLabelTypes(array $LabelTypes) 设置计费细项标签数组
Saas 高级版  sv_wsm_waf_package_premium 
Saas 企业版  sv_wsm_waf_package_enterprise
Saas 旗舰版  sv_wsm_waf_package_ultimate 
Saas 非中国大陆高级版  sv_wsm_waf_package_premium_intl
Saas 非中国大陆企业版   sv_wsm_waf_package_enterprise_intl
Saas 非中国大陆旗舰版  sv_wsm_waf_package_ultimate _intl
Saas 业务扩展包  sv_wsm_waf_qps_ep
Saas 域名扩展包  sv_wsm_waf_domain

高级版CLB   sv_wsm_waf_package_premium_clb
企业版CLB  sv_wsm_waf_package_enterprise_clb
旗舰版CLB   sv_wsm_waf_package_ultimate_clb
非中国大陆高级版 CLB sv_wsm_waf_package_premium_clb_intl
非中国大陆企业版CLB   sv_wsm_waf_package_premium_clb_intl
非中国大陆旗舰版CLB  sv_wsm_waf_package_ultimate_clb _intl
业务扩展包CLB sv_wsm_waf_qps_ep_clb
域名扩展包CLB  sv_wsm_waf_domain_clb

注意：此字段可能返回 null，表示取不到有效值。
 * @method array getLabelCounts() 获取计费细项标签数量，一般和SvLabelType一一对应
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLabelCounts(array $LabelCounts) 设置计费细项标签数量，一般和SvLabelType一一对应
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCurDeadline() 获取变配使用，实例到期时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCurDeadline(string $CurDeadline) 设置变配使用，实例到期时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInstanceId() 获取对存在的实例购买bot 或api 安全
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceId(string $InstanceId) 设置对存在的实例购买bot 或api 安全
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getResourceId() 获取资源id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResourceId(string $ResourceId) 设置资源id
注意：此字段可能返回 null，表示取不到有效值。
 */
class GoodsDetailNew extends AbstractModel
{
    /**
     * @var integer 时间间隔
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TimeSpan;

    /**
     * @var string 单位，支持购买d、m、y 即（日、月、年）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TimeUnit;

    /**
     * @var string 子产品标签,。新购，续费必传，变配时放在oldConfig newConfig里面

Saas 高级版 ：sp_wsm_waf_premium
Saas企业版 ：sp_wsm_waf_enterprise
Saas旗舰版 ：sp_wsm_waf_ultimate
Saas 业务扩展包：sp_wsm_waf_qpsep
Saas 域名扩展包：sp_wsm_waf_domain

高级版-CLB:sp_wsm_waf_premium_clb
企业版-CLB : sp_wsm_waf_enterprise_clb
旗舰版-CLB:sp_wsm_waf_ultimate_clb
 业务扩展包-CLB：sp_wsm_waf_qpsep_clb
域名扩展包-CLB：sp_wsm_waf_domain_clb

注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SubProductCode;

    /**
     * @var integer 业务产品申请的pid（对应一个定价公式），通过pid计费查询到定价模型
高级版 ：1000827
企业版 ：1000830
旗舰版 ：1000832
域名包 : 1000834
业务扩展包 : 1000481
高级版-CLB:1001150
企业版-CLB : 1001152
旗舰版-CLB:1001154
域名包-CLB: 1001156
业务扩展包-CLB : 1001160

注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Pid;

    /**
     * @var string waf实例名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceName;

    /**
     * @var integer 1:自动续费，0:不自动续费
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AutoRenewFlag;

    /**
     * @var integer waf购买的实际地域信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RealRegion;

    /**
     * @var array 计费细项标签数组
Saas 高级版  sv_wsm_waf_package_premium 
Saas 企业版  sv_wsm_waf_package_enterprise
Saas 旗舰版  sv_wsm_waf_package_ultimate 
Saas 非中国大陆高级版  sv_wsm_waf_package_premium_intl
Saas 非中国大陆企业版   sv_wsm_waf_package_enterprise_intl
Saas 非中国大陆旗舰版  sv_wsm_waf_package_ultimate _intl
Saas 业务扩展包  sv_wsm_waf_qps_ep
Saas 域名扩展包  sv_wsm_waf_domain

高级版CLB   sv_wsm_waf_package_premium_clb
企业版CLB  sv_wsm_waf_package_enterprise_clb
旗舰版CLB   sv_wsm_waf_package_ultimate_clb
非中国大陆高级版 CLB sv_wsm_waf_package_premium_clb_intl
非中国大陆企业版CLB   sv_wsm_waf_package_premium_clb_intl
非中国大陆旗舰版CLB  sv_wsm_waf_package_ultimate_clb _intl
业务扩展包CLB sv_wsm_waf_qps_ep_clb
域名扩展包CLB  sv_wsm_waf_domain_clb

注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LabelTypes;

    /**
     * @var array 计费细项标签数量，一般和SvLabelType一一对应
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LabelCounts;

    /**
     * @var string 变配使用，实例到期时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CurDeadline;

    /**
     * @var string 对存在的实例购买bot 或api 安全
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceId;

    /**
     * @var string 资源id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResourceId;

    /**
     * @param integer $TimeSpan 时间间隔
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TimeUnit 单位，支持购买d、m、y 即（日、月、年）
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SubProductCode 子产品标签,。新购，续费必传，变配时放在oldConfig newConfig里面

Saas 高级版 ：sp_wsm_waf_premium
Saas企业版 ：sp_wsm_waf_enterprise
Saas旗舰版 ：sp_wsm_waf_ultimate
Saas 业务扩展包：sp_wsm_waf_qpsep
Saas 域名扩展包：sp_wsm_waf_domain

高级版-CLB:sp_wsm_waf_premium_clb
企业版-CLB : sp_wsm_waf_enterprise_clb
旗舰版-CLB:sp_wsm_waf_ultimate_clb
 业务扩展包-CLB：sp_wsm_waf_qpsep_clb
域名扩展包-CLB：sp_wsm_waf_domain_clb

注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Pid 业务产品申请的pid（对应一个定价公式），通过pid计费查询到定价模型
高级版 ：1000827
企业版 ：1000830
旗舰版 ：1000832
域名包 : 1000834
业务扩展包 : 1000481
高级版-CLB:1001150
企业版-CLB : 1001152
旗舰版-CLB:1001154
域名包-CLB: 1001156
业务扩展包-CLB : 1001160

注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InstanceName waf实例名
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $AutoRenewFlag 1:自动续费，0:不自动续费
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RealRegion waf购买的实际地域信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $LabelTypes 计费细项标签数组
Saas 高级版  sv_wsm_waf_package_premium 
Saas 企业版  sv_wsm_waf_package_enterprise
Saas 旗舰版  sv_wsm_waf_package_ultimate 
Saas 非中国大陆高级版  sv_wsm_waf_package_premium_intl
Saas 非中国大陆企业版   sv_wsm_waf_package_enterprise_intl
Saas 非中国大陆旗舰版  sv_wsm_waf_package_ultimate _intl
Saas 业务扩展包  sv_wsm_waf_qps_ep
Saas 域名扩展包  sv_wsm_waf_domain

高级版CLB   sv_wsm_waf_package_premium_clb
企业版CLB  sv_wsm_waf_package_enterprise_clb
旗舰版CLB   sv_wsm_waf_package_ultimate_clb
非中国大陆高级版 CLB sv_wsm_waf_package_premium_clb_intl
非中国大陆企业版CLB   sv_wsm_waf_package_premium_clb_intl
非中国大陆旗舰版CLB  sv_wsm_waf_package_ultimate_clb _intl
业务扩展包CLB sv_wsm_waf_qps_ep_clb
域名扩展包CLB  sv_wsm_waf_domain_clb

注意：此字段可能返回 null，表示取不到有效值。
     * @param array $LabelCounts 计费细项标签数量，一般和SvLabelType一一对应
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CurDeadline 变配使用，实例到期时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InstanceId 对存在的实例购买bot 或api 安全
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ResourceId 资源id
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
        if (array_key_exists("TimeSpan",$param) and $param["TimeSpan"] !== null) {
            $this->TimeSpan = $param["TimeSpan"];
        }

        if (array_key_exists("TimeUnit",$param) and $param["TimeUnit"] !== null) {
            $this->TimeUnit = $param["TimeUnit"];
        }

        if (array_key_exists("SubProductCode",$param) and $param["SubProductCode"] !== null) {
            $this->SubProductCode = $param["SubProductCode"];
        }

        if (array_key_exists("Pid",$param) and $param["Pid"] !== null) {
            $this->Pid = $param["Pid"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("AutoRenewFlag",$param) and $param["AutoRenewFlag"] !== null) {
            $this->AutoRenewFlag = $param["AutoRenewFlag"];
        }

        if (array_key_exists("RealRegion",$param) and $param["RealRegion"] !== null) {
            $this->RealRegion = $param["RealRegion"];
        }

        if (array_key_exists("LabelTypes",$param) and $param["LabelTypes"] !== null) {
            $this->LabelTypes = $param["LabelTypes"];
        }

        if (array_key_exists("LabelCounts",$param) and $param["LabelCounts"] !== null) {
            $this->LabelCounts = $param["LabelCounts"];
        }

        if (array_key_exists("CurDeadline",$param) and $param["CurDeadline"] !== null) {
            $this->CurDeadline = $param["CurDeadline"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }
    }
}
