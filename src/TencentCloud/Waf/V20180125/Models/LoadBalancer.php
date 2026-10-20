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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 负载均衡的监听器
 *
 * @method string getLoadBalancerId() 获取<p>负载均衡LD的ID</p>
 * @method void setLoadBalancerId(string $LoadBalancerId) 设置<p>负载均衡LD的ID</p>
 * @method string getLoadBalancerName() 获取<p>负载均衡LD的名称</p>
 * @method void setLoadBalancerName(string $LoadBalancerName) 设置<p>负载均衡LD的名称</p>
 * @method string getListenerId() 获取<p>负载均衡监听器的ID</p>
 * @method void setListenerId(string $ListenerId) 设置<p>负载均衡监听器的ID</p>
 * @method string getListenerName() 获取<p>负载均衡监听器的名称</p>
 * @method void setListenerName(string $ListenerName) 设置<p>负载均衡监听器的名称</p>
 * @method integer getVport() 获取<p>负载均衡实例的端口</p>
 * @method void setVport(integer $Vport) 设置<p>负载均衡实例的端口</p>
 * @method string getRegion() 获取<p>负载均衡LD的地域<br>与 ApRegion 表达同一含义、格式不同。本字段为地域缩写；入参与 ApRegion 同时传入时以 ApRegion 为准</p>
 * @method void setRegion(string $Region) 设置<p>负载均衡LD的地域<br>与 ApRegion 表达同一含义、格式不同。本字段为地域缩写；入参与 ApRegion 同时传入时以 ApRegion 为准</p>
 * @method string getProtocol() 获取<p>监听器协议，http、https</p>
 * @method void setProtocol(string $Protocol) 设置<p>监听器协议，http、https</p>
 * @method string getZone() 获取<p>负载均衡监听器所在的zone</p>
 * @method void setZone(string $Zone) 设置<p>负载均衡监听器所在的zone</p>
 * @method array getApRegion() 获取<p>负载均衡实例所在地域，腾讯云标准地域格式<br>参数格式：形如 ap-guangzhou<br>与 Region 表达同一含义、格式不同。监听器恒为单地域，数组长度恒为 0 或 1<br>入参可选；与 Region 同时传入时以本字段为准；取值不在枚举范围内时返回 UnsupportedRegion<br>出参在可识别时填充，无法识别时为空数组<br>枚举值：<br>ap-guangzhou：广州<br>ap-shanghai：上海<br>ap-beijing：北京<br>ap-chengdu：成都<br>ap-chongqing：重庆<br>ap-hongkong：中国香港<br>ap-nanjing：南京<br>ap-tianjin：天津<br>ap-shenzhen：深圳<br>ap-qingyuan：清远<br>ap-guangzhou-open：广州Open<br>ap-shenzhen-fsi：深圳金融<br>ap-beijing-fsi：北京金融<br>ap-shanghai-fsi：上海金融<br>ap-hangzhou-ec：杭州<br>ap-fuzhou-ec：福州<br>ap-jinan-ec：济南<br>ap-wuhan-ec：武汉<br>ap-changsha-ec：长沙<br>ap-hefei-ec：合肥<br>ap-shenyang-ec：沈阳<br>ap-xian-ec：西安<br>ap-xibei-ec：西北<br>ap-shijiazhuang-ec：石家庄<br>ap-zhengzhou-ec：郑州<br>ap-qingyuan-xinan：清远信安<br>ap-shanghai-adc：上海ADC<br>ap-shanghai-wxp-ops：上海无线城市运营<br>ap-singapore：新加坡<br>ap-seoul：首尔<br>ap-tokyo：东京<br>ap-osaka：大阪<br>ap-mumbai：孟买<br>ap-bangkok：曼谷<br>ap-jakarta：雅加达<br>ap-taipei：台北<br>ap-johorbahru：柔佛巴鲁<br>eu-frankfurt：法兰克福<br>eu-moscow：莫斯科<br>na-ashburn：弗吉尼亚<br>na-siliconvalley：硅谷<br>na-toronto：多伦多<br>sa-saopaulo：圣保罗<br>me-saudi-arabia：沙特阿拉伯</p>
 * @method void setApRegion(array $ApRegion) 设置<p>负载均衡实例所在地域，腾讯云标准地域格式<br>参数格式：形如 ap-guangzhou<br>与 Region 表达同一含义、格式不同。监听器恒为单地域，数组长度恒为 0 或 1<br>入参可选；与 Region 同时传入时以本字段为准；取值不在枚举范围内时返回 UnsupportedRegion<br>出参在可识别时填充，无法识别时为空数组<br>枚举值：<br>ap-guangzhou：广州<br>ap-shanghai：上海<br>ap-beijing：北京<br>ap-chengdu：成都<br>ap-chongqing：重庆<br>ap-hongkong：中国香港<br>ap-nanjing：南京<br>ap-tianjin：天津<br>ap-shenzhen：深圳<br>ap-qingyuan：清远<br>ap-guangzhou-open：广州Open<br>ap-shenzhen-fsi：深圳金融<br>ap-beijing-fsi：北京金融<br>ap-shanghai-fsi：上海金融<br>ap-hangzhou-ec：杭州<br>ap-fuzhou-ec：福州<br>ap-jinan-ec：济南<br>ap-wuhan-ec：武汉<br>ap-changsha-ec：长沙<br>ap-hefei-ec：合肥<br>ap-shenyang-ec：沈阳<br>ap-xian-ec：西安<br>ap-xibei-ec：西北<br>ap-shijiazhuang-ec：石家庄<br>ap-zhengzhou-ec：郑州<br>ap-qingyuan-xinan：清远信安<br>ap-shanghai-adc：上海ADC<br>ap-shanghai-wxp-ops：上海无线城市运营<br>ap-singapore：新加坡<br>ap-seoul：首尔<br>ap-tokyo：东京<br>ap-osaka：大阪<br>ap-mumbai：孟买<br>ap-bangkok：曼谷<br>ap-jakarta：雅加达<br>ap-taipei：台北<br>ap-johorbahru：柔佛巴鲁<br>eu-frankfurt：法兰克福<br>eu-moscow：莫斯科<br>na-ashburn：弗吉尼亚<br>na-siliconvalley：硅谷<br>na-toronto：多伦多<br>sa-saopaulo：圣保罗<br>me-saudi-arabia：沙特阿拉伯</p>
 * @method string getVip() 获取<p>负载均衡实例的IP。域名化CLB VIP可填空。</p>
 * @method void setVip(string $Vip) 设置<p>负载均衡实例的IP。域名化CLB VIP可填空。</p>
 * @method integer getNumericalVpcId() 获取<p>负载均衡的VPCID，公网为-1，内网按实际填写</p>
 * @method void setNumericalVpcId(integer $NumericalVpcId) 设置<p>负载均衡的VPCID，公网为-1，内网按实际填写</p>
 * @method string getLoadBalancerType() 获取<p>负载均衡的网络类型。OPEN： 公网 INTERNAL ：内网</p>
 * @method void setLoadBalancerType(string $LoadBalancerType) 设置<p>负载均衡的网络类型。OPEN： 公网 INTERNAL ：内网</p>
 * @method string getLoadBalancerDomain() 获取<p>负载均衡的域名</p>
 * @method void setLoadBalancerDomain(string $LoadBalancerDomain) 设置<p>负载均衡的域名</p>
 * @method integer getMemberAppId() 获取<p>监听器所属成员id</p>
 * @method void setMemberAppId(integer $MemberAppId) 设置<p>监听器所属成员id</p>
 * @method string getMemberUin() 获取<p>监听器所属成员的uin</p>
 * @method void setMemberUin(string $MemberUin) 设置<p>监听器所属成员的uin</p>
 */
class LoadBalancer extends AbstractModel
{
    /**
     * @var string <p>负载均衡LD的ID</p>
     */
    public $LoadBalancerId;

    /**
     * @var string <p>负载均衡LD的名称</p>
     */
    public $LoadBalancerName;

    /**
     * @var string <p>负载均衡监听器的ID</p>
     */
    public $ListenerId;

    /**
     * @var string <p>负载均衡监听器的名称</p>
     */
    public $ListenerName;

    /**
     * @var integer <p>负载均衡实例的端口</p>
     */
    public $Vport;

    /**
     * @var string <p>负载均衡LD的地域<br>与 ApRegion 表达同一含义、格式不同。本字段为地域缩写；入参与 ApRegion 同时传入时以 ApRegion 为准</p>
     */
    public $Region;

    /**
     * @var string <p>监听器协议，http、https</p>
     */
    public $Protocol;

    /**
     * @var string <p>负载均衡监听器所在的zone</p>
     */
    public $Zone;

    /**
     * @var array <p>负载均衡实例所在地域，腾讯云标准地域格式<br>参数格式：形如 ap-guangzhou<br>与 Region 表达同一含义、格式不同。监听器恒为单地域，数组长度恒为 0 或 1<br>入参可选；与 Region 同时传入时以本字段为准；取值不在枚举范围内时返回 UnsupportedRegion<br>出参在可识别时填充，无法识别时为空数组<br>枚举值：<br>ap-guangzhou：广州<br>ap-shanghai：上海<br>ap-beijing：北京<br>ap-chengdu：成都<br>ap-chongqing：重庆<br>ap-hongkong：中国香港<br>ap-nanjing：南京<br>ap-tianjin：天津<br>ap-shenzhen：深圳<br>ap-qingyuan：清远<br>ap-guangzhou-open：广州Open<br>ap-shenzhen-fsi：深圳金融<br>ap-beijing-fsi：北京金融<br>ap-shanghai-fsi：上海金融<br>ap-hangzhou-ec：杭州<br>ap-fuzhou-ec：福州<br>ap-jinan-ec：济南<br>ap-wuhan-ec：武汉<br>ap-changsha-ec：长沙<br>ap-hefei-ec：合肥<br>ap-shenyang-ec：沈阳<br>ap-xian-ec：西安<br>ap-xibei-ec：西北<br>ap-shijiazhuang-ec：石家庄<br>ap-zhengzhou-ec：郑州<br>ap-qingyuan-xinan：清远信安<br>ap-shanghai-adc：上海ADC<br>ap-shanghai-wxp-ops：上海无线城市运营<br>ap-singapore：新加坡<br>ap-seoul：首尔<br>ap-tokyo：东京<br>ap-osaka：大阪<br>ap-mumbai：孟买<br>ap-bangkok：曼谷<br>ap-jakarta：雅加达<br>ap-taipei：台北<br>ap-johorbahru：柔佛巴鲁<br>eu-frankfurt：法兰克福<br>eu-moscow：莫斯科<br>na-ashburn：弗吉尼亚<br>na-siliconvalley：硅谷<br>na-toronto：多伦多<br>sa-saopaulo：圣保罗<br>me-saudi-arabia：沙特阿拉伯</p>
     */
    public $ApRegion;

    /**
     * @var string <p>负载均衡实例的IP。域名化CLB VIP可填空。</p>
     */
    public $Vip;

    /**
     * @var integer <p>负载均衡的VPCID，公网为-1，内网按实际填写</p>
     */
    public $NumericalVpcId;

    /**
     * @var string <p>负载均衡的网络类型。OPEN： 公网 INTERNAL ：内网</p>
     */
    public $LoadBalancerType;

    /**
     * @var string <p>负载均衡的域名</p>
     */
    public $LoadBalancerDomain;

    /**
     * @var integer <p>监听器所属成员id</p>
     */
    public $MemberAppId;

    /**
     * @var string <p>监听器所属成员的uin</p>
     */
    public $MemberUin;

    /**
     * @param string $LoadBalancerId <p>负载均衡LD的ID</p>
     * @param string $LoadBalancerName <p>负载均衡LD的名称</p>
     * @param string $ListenerId <p>负载均衡监听器的ID</p>
     * @param string $ListenerName <p>负载均衡监听器的名称</p>
     * @param integer $Vport <p>负载均衡实例的端口</p>
     * @param string $Region <p>负载均衡LD的地域<br>与 ApRegion 表达同一含义、格式不同。本字段为地域缩写；入参与 ApRegion 同时传入时以 ApRegion 为准</p>
     * @param string $Protocol <p>监听器协议，http、https</p>
     * @param string $Zone <p>负载均衡监听器所在的zone</p>
     * @param array $ApRegion <p>负载均衡实例所在地域，腾讯云标准地域格式<br>参数格式：形如 ap-guangzhou<br>与 Region 表达同一含义、格式不同。监听器恒为单地域，数组长度恒为 0 或 1<br>入参可选；与 Region 同时传入时以本字段为准；取值不在枚举范围内时返回 UnsupportedRegion<br>出参在可识别时填充，无法识别时为空数组<br>枚举值：<br>ap-guangzhou：广州<br>ap-shanghai：上海<br>ap-beijing：北京<br>ap-chengdu：成都<br>ap-chongqing：重庆<br>ap-hongkong：中国香港<br>ap-nanjing：南京<br>ap-tianjin：天津<br>ap-shenzhen：深圳<br>ap-qingyuan：清远<br>ap-guangzhou-open：广州Open<br>ap-shenzhen-fsi：深圳金融<br>ap-beijing-fsi：北京金融<br>ap-shanghai-fsi：上海金融<br>ap-hangzhou-ec：杭州<br>ap-fuzhou-ec：福州<br>ap-jinan-ec：济南<br>ap-wuhan-ec：武汉<br>ap-changsha-ec：长沙<br>ap-hefei-ec：合肥<br>ap-shenyang-ec：沈阳<br>ap-xian-ec：西安<br>ap-xibei-ec：西北<br>ap-shijiazhuang-ec：石家庄<br>ap-zhengzhou-ec：郑州<br>ap-qingyuan-xinan：清远信安<br>ap-shanghai-adc：上海ADC<br>ap-shanghai-wxp-ops：上海无线城市运营<br>ap-singapore：新加坡<br>ap-seoul：首尔<br>ap-tokyo：东京<br>ap-osaka：大阪<br>ap-mumbai：孟买<br>ap-bangkok：曼谷<br>ap-jakarta：雅加达<br>ap-taipei：台北<br>ap-johorbahru：柔佛巴鲁<br>eu-frankfurt：法兰克福<br>eu-moscow：莫斯科<br>na-ashburn：弗吉尼亚<br>na-siliconvalley：硅谷<br>na-toronto：多伦多<br>sa-saopaulo：圣保罗<br>me-saudi-arabia：沙特阿拉伯</p>
     * @param string $Vip <p>负载均衡实例的IP。域名化CLB VIP可填空。</p>
     * @param integer $NumericalVpcId <p>负载均衡的VPCID，公网为-1，内网按实际填写</p>
     * @param string $LoadBalancerType <p>负载均衡的网络类型。OPEN： 公网 INTERNAL ：内网</p>
     * @param string $LoadBalancerDomain <p>负载均衡的域名</p>
     * @param integer $MemberAppId <p>监听器所属成员id</p>
     * @param string $MemberUin <p>监听器所属成员的uin</p>
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
        if (array_key_exists("LoadBalancerId",$param) and $param["LoadBalancerId"] !== null) {
            $this->LoadBalancerId = $param["LoadBalancerId"];
        }

        if (array_key_exists("LoadBalancerName",$param) and $param["LoadBalancerName"] !== null) {
            $this->LoadBalancerName = $param["LoadBalancerName"];
        }

        if (array_key_exists("ListenerId",$param) and $param["ListenerId"] !== null) {
            $this->ListenerId = $param["ListenerId"];
        }

        if (array_key_exists("ListenerName",$param) and $param["ListenerName"] !== null) {
            $this->ListenerName = $param["ListenerName"];
        }

        if (array_key_exists("Vport",$param) and $param["Vport"] !== null) {
            $this->Vport = $param["Vport"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("ApRegion",$param) and $param["ApRegion"] !== null) {
            $this->ApRegion = $param["ApRegion"];
        }

        if (array_key_exists("Vip",$param) and $param["Vip"] !== null) {
            $this->Vip = $param["Vip"];
        }

        if (array_key_exists("NumericalVpcId",$param) and $param["NumericalVpcId"] !== null) {
            $this->NumericalVpcId = $param["NumericalVpcId"];
        }

        if (array_key_exists("LoadBalancerType",$param) and $param["LoadBalancerType"] !== null) {
            $this->LoadBalancerType = $param["LoadBalancerType"];
        }

        if (array_key_exists("LoadBalancerDomain",$param) and $param["LoadBalancerDomain"] !== null) {
            $this->LoadBalancerDomain = $param["LoadBalancerDomain"];
        }

        if (array_key_exists("MemberAppId",$param) and $param["MemberAppId"] !== null) {
            $this->MemberAppId = $param["MemberAppId"];
        }

        if (array_key_exists("MemberUin",$param) and $param["MemberUin"] !== null) {
            $this->MemberUin = $param["MemberUin"];
        }
    }
}
