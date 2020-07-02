<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the 'License');
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
namespace TencentCloud\Dayu\V20180709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDDoSEvList请求参数结构体
 *
 * @method string getBusiness() 获取大禹子产品代号（bgpip表示高防IP；bgp表示独享包；bgp-multip表示共享包；net表示高防IP专业版；basic表示DDoS基础防护）
 * @method void setBusiness(string $Business) 设置大禹子产品代号（bgpip表示高防IP；bgp表示独享包；bgp-multip表示共享包；net表示高防IP专业版；basic表示DDoS基础防护）
 * @method string getStartTime() 获取开始时间
 * @method void setStartTime(string $StartTime) 设置开始时间
 * @method string getEndTime() 获取结束时间
 * @method void setEndTime(string $EndTime) 设置结束时间
 * @method string getId() 获取资源实例ID，当Business为basic时，此字段不用填写（因为基础防护没有资源实例）
 * @method void setId(string $Id) 设置资源实例ID，当Business为basic时，此字段不用填写（因为基础防护没有资源实例）
 * @method array getIpList() 获取资源的IP
 * @method void setIpList(array $IpList) 设置资源的IP
 * @method string getOverLoad() 获取是否超过弹性防护峰值，取值[yes(是)，no(否)]，填写空字符串时表示不进行过滤
 * @method void setOverLoad(string $OverLoad) 设置是否超过弹性防护峰值，取值[yes(是)，no(否)]，填写空字符串时表示不进行过滤
 * @method integer getLimit() 获取一页条数，填0表示不分页
 * @method void setLimit(integer $Limit) 设置一页条数，填0表示不分页
 * @method integer getOffset() 获取页起始偏移，取值为(页码-1)*一页条数
 * @method void setOffset(integer $Offset) 设置页起始偏移，取值为(页码-1)*一页条数
 */
class DescribeDDoSEvListRequest extends AbstractModel
{
    /**
     * @var string 大禹子产品代号（bgpip表示高防IP；bgp表示独享包；bgp-multip表示共享包；net表示高防IP专业版；basic表示DDoS基础防护）
     */
    public $Business;

    /**
     * @var string 开始时间
     */
    public $StartTime;

    /**
     * @var string 结束时间
     */
    public $EndTime;

    /**
     * @var string 资源实例ID，当Business为basic时，此字段不用填写（因为基础防护没有资源实例）
     */
    public $Id;

    /**
     * @var array 资源的IP
     */
    public $IpList;

    /**
     * @var string 是否超过弹性防护峰值，取值[yes(是)，no(否)]，填写空字符串时表示不进行过滤
     */
    public $OverLoad;

    /**
     * @var integer 一页条数，填0表示不分页
     */
    public $Limit;

    /**
     * @var integer 页起始偏移，取值为(页码-1)*一页条数
     */
    public $Offset;

    /**
     * @param string $Business 大禹子产品代号（bgpip表示高防IP；bgp表示独享包；bgp-multip表示共享包；net表示高防IP专业版；basic表示DDoS基础防护）
     * @param string $StartTime 开始时间
     * @param string $EndTime 结束时间
     * @param string $Id 资源实例ID，当Business为basic时，此字段不用填写（因为基础防护没有资源实例）
     * @param array $IpList 资源的IP
     * @param string $OverLoad 是否超过弹性防护峰值，取值[yes(是)，no(否)]，填写空字符串时表示不进行过滤
     * @param integer $Limit 一页条数，填0表示不分页
     * @param integer $Offset 页起始偏移，取值为(页码-1)*一页条数
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
        if (array_key_exists('Business',$param) and $param['Business'] !== null) {
            $this->Business = $param['Business'];
        }

        if (array_key_exists('StartTime',$param) and $param['StartTime'] !== null) {
            $this->StartTime = $param['StartTime'];
        }

        if (array_key_exists('EndTime',$param) and $param['EndTime'] !== null) {
            $this->EndTime = $param['EndTime'];
        }

        if (array_key_exists('Id',$param) and $param['Id'] !== null) {
            $this->Id = $param['Id'];
        }

        if (array_key_exists('IpList',$param) and $param['IpList'] !== null) {
            $this->IpList = $param['IpList'];
        }

        if (array_key_exists('OverLoad',$param) and $param['OverLoad'] !== null) {
            $this->OverLoad = $param['OverLoad'];
        }

        if (array_key_exists('Limit',$param) and $param['Limit'] !== null) {
            $this->Limit = $param['Limit'];
        }

        if (array_key_exists('Offset',$param) and $param['Offset'] !== null) {
            $this->Offset = $param['Offset'];
        }
    }
}
