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
namespace TencentCloud\Dnspod\V20210323\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateAndPayDeal请求参数结构体
 *
 * @method integer getDealType() 获取<p>询价类型，1 新购，2 续费，3 套餐升级（增值服务暂时只支持新购）</p>
 * @method void setDealType(integer $DealType) 设置<p>询价类型，1 新购，2 续费，3 套餐升级（增值服务暂时只支持新购）</p>
 * @method integer getGoodsType() 获取<p>商品类型，1 域名套餐 2 增值服务</p>
 * @method void setGoodsType(integer $GoodsType) 设置<p>商品类型，1 域名套餐 2 增值服务</p>
 * @method string getGoodsChildType() 获取<p>套餐类型：<br>DP_PLUS：专业版<br>DP_EXPERT：企业版<br>DP_ULTRA：尊享版</p><p>增值服务类型<br>LB：负载均衡<br>URL：URL转发<br>DMONITOR_TASKS：D监控任务数<br>DMONITOR_IP：D监控备用 IP 数<br>CUSTOMLINE：自定义线路数</p>
 * @method void setGoodsChildType(string $GoodsChildType) 设置<p>套餐类型：<br>DP_PLUS：专业版<br>DP_EXPERT：企业版<br>DP_ULTRA：尊享版</p><p>增值服务类型<br>LB：负载均衡<br>URL：URL转发<br>DMONITOR_TASKS：D监控任务数<br>DMONITOR_IP：D监控备用 IP 数<br>CUSTOMLINE：自定义线路数</p>
 * @method integer getGoodsNum() 获取<p>增值服务购买数量，如果是域名套餐固定为1，如果是增值服务则按以下规则：<br>负载均衡、D监控任务数、D监控备用 IP 数、自定义线路数、URL 转发（必须是5的正整数倍，如 5、10、15 等）</p>
 * @method void setGoodsNum(integer $GoodsNum) 设置<p>增值服务购买数量，如果是域名套餐固定为1，如果是增值服务则按以下规则：<br>负载均衡、D监控任务数、D监控备用 IP 数、自定义线路数、URL 转发（必须是5的正整数倍，如 5、10、15 等）</p>
 * @method integer getAutoRenew() 获取<p>是否开启自动续费，1 开启，2 不开启（增值服务暂不支持自动续费），默认值为 2 不开启</p>
 * @method void setAutoRenew(integer $AutoRenew) 设置<p>是否开启自动续费，1 开启，2 不开启（增值服务暂不支持自动续费），默认值为 2 不开启</p>
 * @method string getDomain() 获取<p>需要绑定套餐的域名，如 dnspod.cn，如果是续费或升级，domain 参数必须要传，新购可不传。</p>
 * @method void setDomain(string $Domain) 设置<p>需要绑定套餐的域名，如 dnspod.cn，如果是续费或升级，domain 参数必须要传，新购可不传。</p>
 * @method integer getTimeSpan() 获取<p>套餐时长：</p><ol><li>套餐以月为单位（按月只能是 3、6 还有 12 的倍数），套餐例如购买一年则传12，最大120 。（续费最低一年）</li><li>升级套餐时不需要传。</li><li>增值服务的时长单位为年，买一年传1（增值服务新购按年只能是 1，增值服务续费最大为 10）</li></ol>
 * @method void setTimeSpan(integer $TimeSpan) 设置<p>套餐时长：</p><ol><li>套餐以月为单位（按月只能是 3、6 还有 12 的倍数），套餐例如购买一年则传12，最大120 。（续费最低一年）</li><li>升级套餐时不需要传。</li><li>增值服务的时长单位为年，买一年传1（增值服务新购按年只能是 1，增值服务续费最大为 10）</li></ol>
 * @method string getNewPackageType() 获取<p>套餐类型，需要升级到的套餐类型，只有升级时需要。</p>
 * @method void setNewPackageType(string $NewPackageType) 设置<p>套餐类型，需要升级到的套餐类型，只有升级时需要。</p>
 * @method string getClientToken() 获取<p>可重入ID，避免接口重试场景生成额外订单和实例</p><p>入参限制：长度不超过70个字符</p>
 * @method void setClientToken(string $ClientToken) 设置<p>可重入ID，避免接口重试场景生成额外订单和实例</p><p>入参限制：长度不超过70个字符</p>
 */
class CreateAndPayDealRequest extends AbstractModel
{
    /**
     * @var integer <p>询价类型，1 新购，2 续费，3 套餐升级（增值服务暂时只支持新购）</p>
     */
    public $DealType;

    /**
     * @var integer <p>商品类型，1 域名套餐 2 增值服务</p>
     */
    public $GoodsType;

    /**
     * @var string <p>套餐类型：<br>DP_PLUS：专业版<br>DP_EXPERT：企业版<br>DP_ULTRA：尊享版</p><p>增值服务类型<br>LB：负载均衡<br>URL：URL转发<br>DMONITOR_TASKS：D监控任务数<br>DMONITOR_IP：D监控备用 IP 数<br>CUSTOMLINE：自定义线路数</p>
     */
    public $GoodsChildType;

    /**
     * @var integer <p>增值服务购买数量，如果是域名套餐固定为1，如果是增值服务则按以下规则：<br>负载均衡、D监控任务数、D监控备用 IP 数、自定义线路数、URL 转发（必须是5的正整数倍，如 5、10、15 等）</p>
     */
    public $GoodsNum;

    /**
     * @var integer <p>是否开启自动续费，1 开启，2 不开启（增值服务暂不支持自动续费），默认值为 2 不开启</p>
     */
    public $AutoRenew;

    /**
     * @var string <p>需要绑定套餐的域名，如 dnspod.cn，如果是续费或升级，domain 参数必须要传，新购可不传。</p>
     */
    public $Domain;

    /**
     * @var integer <p>套餐时长：</p><ol><li>套餐以月为单位（按月只能是 3、6 还有 12 的倍数），套餐例如购买一年则传12，最大120 。（续费最低一年）</li><li>升级套餐时不需要传。</li><li>增值服务的时长单位为年，买一年传1（增值服务新购按年只能是 1，增值服务续费最大为 10）</li></ol>
     */
    public $TimeSpan;

    /**
     * @var string <p>套餐类型，需要升级到的套餐类型，只有升级时需要。</p>
     */
    public $NewPackageType;

    /**
     * @var string <p>可重入ID，避免接口重试场景生成额外订单和实例</p><p>入参限制：长度不超过70个字符</p>
     */
    public $ClientToken;

    /**
     * @param integer $DealType <p>询价类型，1 新购，2 续费，3 套餐升级（增值服务暂时只支持新购）</p>
     * @param integer $GoodsType <p>商品类型，1 域名套餐 2 增值服务</p>
     * @param string $GoodsChildType <p>套餐类型：<br>DP_PLUS：专业版<br>DP_EXPERT：企业版<br>DP_ULTRA：尊享版</p><p>增值服务类型<br>LB：负载均衡<br>URL：URL转发<br>DMONITOR_TASKS：D监控任务数<br>DMONITOR_IP：D监控备用 IP 数<br>CUSTOMLINE：自定义线路数</p>
     * @param integer $GoodsNum <p>增值服务购买数量，如果是域名套餐固定为1，如果是增值服务则按以下规则：<br>负载均衡、D监控任务数、D监控备用 IP 数、自定义线路数、URL 转发（必须是5的正整数倍，如 5、10、15 等）</p>
     * @param integer $AutoRenew <p>是否开启自动续费，1 开启，2 不开启（增值服务暂不支持自动续费），默认值为 2 不开启</p>
     * @param string $Domain <p>需要绑定套餐的域名，如 dnspod.cn，如果是续费或升级，domain 参数必须要传，新购可不传。</p>
     * @param integer $TimeSpan <p>套餐时长：</p><ol><li>套餐以月为单位（按月只能是 3、6 还有 12 的倍数），套餐例如购买一年则传12，最大120 。（续费最低一年）</li><li>升级套餐时不需要传。</li><li>增值服务的时长单位为年，买一年传1（增值服务新购按年只能是 1，增值服务续费最大为 10）</li></ol>
     * @param string $NewPackageType <p>套餐类型，需要升级到的套餐类型，只有升级时需要。</p>
     * @param string $ClientToken <p>可重入ID，避免接口重试场景生成额外订单和实例</p><p>入参限制：长度不超过70个字符</p>
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

        if (array_key_exists("ClientToken",$param) and $param["ClientToken"] !== null) {
            $this->ClientToken = $param["ClientToken"];
        }
    }
}
