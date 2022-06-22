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
namespace TencentCloud\Dnspod\V20210323\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateDeal请求参数结构体
 *
 * @method integer getDealType() 获取询价类型，1 新购，2 续费，3 套餐升级（增值服务暂时只支持新购）
 * @method void setDealType(integer $DealType) 设置询价类型，1 新购，2 续费，3 套餐升级（增值服务暂时只支持新购）
 * @method integer getGoodsType() 获取商品类型，1 域名套餐 2 增值服务
 * @method void setGoodsType(integer $GoodsType) 设置商品类型，1 域名套餐 2 增值服务
 * @method string getGoodsChildType() 获取套餐类型：
DP_PLUS：专业版
DP_EXPERT：企业版
DP_ULTRA：尊享版

增值服务类型
LB：负载均衡
URL：URL转发
DMONITOR_TASKS：D监控任务数
DMONITOR_IP：D监控备用 IP 数
CUSTOMLINE：自定义线路数
 * @method void setGoodsChildType(string $GoodsChildType) 设置套餐类型：
DP_PLUS：专业版
DP_EXPERT：企业版
DP_ULTRA：尊享版

增值服务类型
LB：负载均衡
URL：URL转发
DMONITOR_TASKS：D监控任务数
DMONITOR_IP：D监控备用 IP 数
CUSTOMLINE：自定义线路数
 * @method integer getGoodsNum() 获取增值服务购买数量，如果是域名套餐固定为1，如果是增值服务则按以下规则：
负载均衡、D监控任务数、D监控备用 IP 数、自定义线路数、URL 转发（必须是5的正整数倍，如 5、10、15 等）
 * @method void setGoodsNum(integer $GoodsNum) 设置增值服务购买数量，如果是域名套餐固定为1，如果是增值服务则按以下规则：
负载均衡、D监控任务数、D监控备用 IP 数、自定义线路数、URL 转发（必须是5的正整数倍，如 5、10、15 等）
 * @method integer getAutoRenew() 获取是否开启自动续费，1 开启，2 不开启（增值服务暂不支持自动续费），默认值为 2 不开启
 * @method void setAutoRenew(integer $AutoRenew) 设置是否开启自动续费，1 开启，2 不开启（增值服务暂不支持自动续费），默认值为 2 不开启
 * @method string getDomain() 获取需要绑定套餐的域名，如 dnspod.cn，如果是续费或升级，domain 参数必须要传，新购可不传。
 * @method void setDomain(string $Domain) 设置需要绑定套餐的域名，如 dnspod.cn，如果是续费或升级，domain 参数必须要传，新购可不传。
 * @method integer getTimeSpan() 获取套餐时长：
1. 套餐以月为单位（按月只能是 3、6 还有 12 的倍数），套餐例如购买一年则传12，最大120 。（续费最低一年）
2. 升级套餐时不需要传。
3. 增值服务的时长单位为年，买一年传1（增值服务新购按年只能是 1，增值服务续费最大为 10）
 * @method void setTimeSpan(integer $TimeSpan) 设置套餐时长：
1. 套餐以月为单位（按月只能是 3、6 还有 12 的倍数），套餐例如购买一年则传12，最大120 。（续费最低一年）
2. 升级套餐时不需要传。
3. 增值服务的时长单位为年，买一年传1（增值服务新购按年只能是 1，增值服务续费最大为 10）
 * @method string getNewPackageType() 获取套餐类型，需要升级到的套餐类型，只有升级时需要。
 * @method void setNewPackageType(string $NewPackageType) 设置套餐类型，需要升级到的套餐类型，只有升级时需要。
 */
class CreateDealRequest extends AbstractModel
{
    /**
     * @var integer 询价类型，1 新购，2 续费，3 套餐升级（增值服务暂时只支持新购）
     */
    public $DealType;

    /**
     * @var integer 商品类型，1 域名套餐 2 增值服务
     */
    public $GoodsType;

    /**
     * @var string 套餐类型：
DP_PLUS：专业版
DP_EXPERT：企业版
DP_ULTRA：尊享版

增值服务类型
LB：负载均衡
URL：URL转发
DMONITOR_TASKS：D监控任务数
DMONITOR_IP：D监控备用 IP 数
CUSTOMLINE：自定义线路数
     */
    public $GoodsChildType;

    /**
     * @var integer 增值服务购买数量，如果是域名套餐固定为1，如果是增值服务则按以下规则：
负载均衡、D监控任务数、D监控备用 IP 数、自定义线路数、URL 转发（必须是5的正整数倍，如 5、10、15 等）
     */
    public $GoodsNum;

    /**
     * @var integer 是否开启自动续费，1 开启，2 不开启（增值服务暂不支持自动续费），默认值为 2 不开启
     */
    public $AutoRenew;

    /**
     * @var string 需要绑定套餐的域名，如 dnspod.cn，如果是续费或升级，domain 参数必须要传，新购可不传。
     */
    public $Domain;

    /**
     * @var integer 套餐时长：
1. 套餐以月为单位（按月只能是 3、6 还有 12 的倍数），套餐例如购买一年则传12，最大120 。（续费最低一年）
2. 升级套餐时不需要传。
3. 增值服务的时长单位为年，买一年传1（增值服务新购按年只能是 1，增值服务续费最大为 10）
     */
    public $TimeSpan;

    /**
     * @var string 套餐类型，需要升级到的套餐类型，只有升级时需要。
     */
    public $NewPackageType;

    /**
     * @param integer $DealType 询价类型，1 新购，2 续费，3 套餐升级（增值服务暂时只支持新购）
     * @param integer $GoodsType 商品类型，1 域名套餐 2 增值服务
     * @param string $GoodsChildType 套餐类型：
DP_PLUS：专业版
DP_EXPERT：企业版
DP_ULTRA：尊享版

增值服务类型
LB：负载均衡
URL：URL转发
DMONITOR_TASKS：D监控任务数
DMONITOR_IP：D监控备用 IP 数
CUSTOMLINE：自定义线路数
     * @param integer $GoodsNum 增值服务购买数量，如果是域名套餐固定为1，如果是增值服务则按以下规则：
负载均衡、D监控任务数、D监控备用 IP 数、自定义线路数、URL 转发（必须是5的正整数倍，如 5、10、15 等）
     * @param integer $AutoRenew 是否开启自动续费，1 开启，2 不开启（增值服务暂不支持自动续费），默认值为 2 不开启
     * @param string $Domain 需要绑定套餐的域名，如 dnspod.cn，如果是续费或升级，domain 参数必须要传，新购可不传。
     * @param integer $TimeSpan 套餐时长：
1. 套餐以月为单位（按月只能是 3、6 还有 12 的倍数），套餐例如购买一年则传12，最大120 。（续费最低一年）
2. 升级套餐时不需要传。
3. 增值服务的时长单位为年，买一年传1（增值服务新购按年只能是 1，增值服务续费最大为 10）
     * @param string $NewPackageType 套餐类型，需要升级到的套餐类型，只有升级时需要。
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
        if (array_key_exists("DealType",$param) and $param["DealType"] !== null) {
            $this->DealType = $param["DealType"];
        }

        if (array_key_exists("GoodsType",$param) and $param["GoodsType"] !== null) {
            $this->GoodsType = $param["GoodsType"];
        }

        if (array_key_exists("GoodsChildType",$param) and $param["GoodsChildType"] !== null) {
            $this->GoodsChildType = $param["GoodsChildType"];
        }

        if (array_key_exists("GoodsNum",$param) and $param["GoodsNum"] !== null) {
            $this->GoodsNum = $param["GoodsNum"];
        }

        if (array_key_exists("AutoRenew",$param) and $param["AutoRenew"] !== null) {
            $this->AutoRenew = $param["AutoRenew"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("TimeSpan",$param) and $param["TimeSpan"] !== null) {
            $this->TimeSpan = $param["TimeSpan"];
        }

        if (array_key_exists("NewPackageType",$param) and $param["NewPackageType"] !== null) {
            $this->NewPackageType = $param["NewPackageType"];
        }
    }
}
