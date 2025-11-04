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
namespace TencentCloud\Mna\V20210119\Models;
use TencentCloud\Common\AbstractModel;

/**
 * OrderFlowPackage请求参数结构体
 *
 * @method string getPackageType() 获取流量包规格类型。可取值如下：
DEVICE_1_FLOW_20G、DEVICE_2_FLOW_50G、
DEVICE_3_FLOW_100G、
DEVICE_5_FLOW_500G，分别代表20G、50G、100G、500G档位的流量包。
档位也影响流量包可绑定的设备数量上限：
20G：最多绑定1个设备
50G：最多绑定2个设备
100G：最多绑定3个设备
500G：最多绑定5个设备
 * @method void setPackageType(string $PackageType) 设置流量包规格类型。可取值如下：
DEVICE_1_FLOW_20G、DEVICE_2_FLOW_50G、
DEVICE_3_FLOW_100G、
DEVICE_5_FLOW_500G，分别代表20G、50G、100G、500G档位的流量包。
档位也影响流量包可绑定的设备数量上限：
20G：最多绑定1个设备
50G：最多绑定2个设备
100G：最多绑定3个设备
500G：最多绑定5个设备
 * @method array getDeviceList() 获取流量包绑定的设备ID列表。捆绑设备个数上限取决于包的规格档位：
20G：最多绑定1个设备
50G：最多绑定2个设备
100G：最多绑定3个设备
500G：最多绑定5个设备
 * @method void setDeviceList(array $DeviceList) 设置流量包绑定的设备ID列表。捆绑设备个数上限取决于包的规格档位：
20G：最多绑定1个设备
50G：最多绑定2个设备
100G：最多绑定3个设备
500G：最多绑定5个设备
 * @method boolean getAutoRenewFlag() 获取是否自动续费，该选项和流量截断冲突，只能开启一个
 * @method void setAutoRenewFlag(boolean $AutoRenewFlag) 设置是否自动续费，该选项和流量截断冲突，只能开启一个
 * @method integer getPackageRegion() 获取区域标识，0：中国境内，1：中国境外
 * @method void setPackageRegion(integer $PackageRegion) 设置区域标识，0：中国境内，1：中国境外
 * @method boolean getFlowTruncFlag() 获取是否开启流量截断功能，该选项和自动续费冲突
 * @method void setFlowTruncFlag(boolean $FlowTruncFlag) 设置是否开启流量截断功能，该选项和自动续费冲突
 * @method boolean getAutoVoucher() 获取是否自动选择代金券，默认false。
有多张券时的选择策略：按照可支付订单全部金额的券，先到期的券，可抵扣金额最大的券，余额最小的券，现金券 这个优先级进行扣券，且最多只抵扣一张券。
 * @method void setAutoVoucher(boolean $AutoVoucher) 设置是否自动选择代金券，默认false。
有多张券时的选择策略：按照可支付订单全部金额的券，先到期的券，可抵扣金额最大的券，余额最小的券，现金券 这个优先级进行扣券，且最多只抵扣一张券。
 * @method array getVoucherIds() 获取指定代金券ID。自动选择代金券时此参数无效。目前只允许传入一张代金券。
注：若指定的代金券不符合订单抵扣条件，则正常支付，不扣券
 * @method void setVoucherIds(array $VoucherIds) 设置指定代金券ID。自动选择代金券时此参数无效。目前只允许传入一张代金券。
注：若指定的代金券不符合订单抵扣条件，则正常支付，不扣券
 */
class OrderFlowPackageRequest extends AbstractModel
{
    /**
     * @var string 流量包规格类型。可取值如下：
DEVICE_1_FLOW_20G、DEVICE_2_FLOW_50G、
DEVICE_3_FLOW_100G、
DEVICE_5_FLOW_500G，分别代表20G、50G、100G、500G档位的流量包。
档位也影响流量包可绑定的设备数量上限：
20G：最多绑定1个设备
50G：最多绑定2个设备
100G：最多绑定3个设备
500G：最多绑定5个设备
     */
    public $PackageType;

    /**
     * @var array 流量包绑定的设备ID列表。捆绑设备个数上限取决于包的规格档位：
20G：最多绑定1个设备
50G：最多绑定2个设备
100G：最多绑定3个设备
500G：最多绑定5个设备
     */
    public $DeviceList;

    /**
     * @var boolean 是否自动续费，该选项和流量截断冲突，只能开启一个
     */
    public $AutoRenewFlag;

    /**
     * @var integer 区域标识，0：中国境内，1：中国境外
     */
    public $PackageRegion;

    /**
     * @var boolean 是否开启流量截断功能，该选项和自动续费冲突
     */
    public $FlowTruncFlag;

    /**
     * @var boolean 是否自动选择代金券，默认false。
有多张券时的选择策略：按照可支付订单全部金额的券，先到期的券，可抵扣金额最大的券，余额最小的券，现金券 这个优先级进行扣券，且最多只抵扣一张券。
     */
    public $AutoVoucher;

    /**
     * @var array 指定代金券ID。自动选择代金券时此参数无效。目前只允许传入一张代金券。
注：若指定的代金券不符合订单抵扣条件，则正常支付，不扣券
     */
    public $VoucherIds;

    /**
     * @param string $PackageType 流量包规格类型。可取值如下：
DEVICE_1_FLOW_20G、DEVICE_2_FLOW_50G、
DEVICE_3_FLOW_100G、
DEVICE_5_FLOW_500G，分别代表20G、50G、100G、500G档位的流量包。
档位也影响流量包可绑定的设备数量上限：
20G：最多绑定1个设备
50G：最多绑定2个设备
100G：最多绑定3个设备
500G：最多绑定5个设备
     * @param array $DeviceList 流量包绑定的设备ID列表。捆绑设备个数上限取决于包的规格档位：
20G：最多绑定1个设备
50G：最多绑定2个设备
100G：最多绑定3个设备
500G：最多绑定5个设备
     * @param boolean $AutoRenewFlag 是否自动续费，该选项和流量截断冲突，只能开启一个
     * @param integer $PackageRegion 区域标识，0：中国境内，1：中国境外
     * @param boolean $FlowTruncFlag 是否开启流量截断功能，该选项和自动续费冲突
     * @param boolean $AutoVoucher 是否自动选择代金券，默认false。
有多张券时的选择策略：按照可支付订单全部金额的券，先到期的券，可抵扣金额最大的券，余额最小的券，现金券 这个优先级进行扣券，且最多只抵扣一张券。
     * @param array $VoucherIds 指定代金券ID。自动选择代金券时此参数无效。目前只允许传入一张代金券。
注：若指定的代金券不符合订单抵扣条件，则正常支付，不扣券
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
        if (array_key_exists("PackageType",$param) and $param["PackageType"] !== null) {
            $this->PackageType = $param["PackageType"];
        }

        if (array_key_exists("DeviceList",$param) and $param["DeviceList"] !== null) {
            $this->DeviceList = $param["DeviceList"];
        }

        if (array_key_exists("AutoRenewFlag",$param) and $param["AutoRenewFlag"] !== null) {
            $this->AutoRenewFlag = $param["AutoRenewFlag"];
        }

        if (array_key_exists("PackageRegion",$param) and $param["PackageRegion"] !== null) {
            $this->PackageRegion = $param["PackageRegion"];
        }

        if (array_key_exists("FlowTruncFlag",$param) and $param["FlowTruncFlag"] !== null) {
            $this->FlowTruncFlag = $param["FlowTruncFlag"];
        }

        if (array_key_exists("AutoVoucher",$param) and $param["AutoVoucher"] !== null) {
            $this->AutoVoucher = $param["AutoVoucher"];
        }

        if (array_key_exists("VoucherIds",$param) and $param["VoucherIds"] !== null) {
            $this->VoucherIds = $param["VoucherIds"];
        }
    }
}
