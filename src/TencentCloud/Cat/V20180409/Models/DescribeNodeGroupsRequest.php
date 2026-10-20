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
namespace TencentCloud\Cat\V20180409\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeNodeGroups请求参数结构体
 *
 * @method array getNodeType() 获取<p>节点类型。0: 全部 1: IDC 2: LastMile 3: Mobile，不填默认为0</p>
 * @method void setNodeType(array $NodeType) 设置<p>节点类型。0: 全部 1: IDC 2: LastMile 3: Mobile，不填默认为0</p>
 * @method integer getTaskCategory() 获取<p>节点分类。0: 全部 1: PC 2：Mobile，不填默认为0。PC分类包括IDC和LM节点类型，Mobile分类包括Mobile节点类型。与NodeType参数取交集。</p>
 * @method void setTaskCategory(integer $TaskCategory) 设置<p>节点分类。0: 全部 1: PC 2：Mobile，不填默认为0。PC分类包括IDC和LM节点类型，Mobile分类包括Mobile节点类型。与NodeType参数取交集。</p>
 * @method integer getIPType() 获取<p>IP类型。0: 全部 1: IPv4 2: IPv6，不填默认为0</p>
 * @method void setIPType(integer $IPType) 设置<p>IP类型。0: 全部 1: IPv4 2: IPv6，不填默认为0</p>
 * @method string getName() 获取<p>拨测点描述关键词。</p>
 * @method void setName(string $Name) 设置<p>拨测点描述关键词。</p>
 * @method integer getRegionID() 获取<p>地域ID。0: 精选拨测点 1: 国内 2: 港澳台 3: 亚太 4: 欧洲与美洲 5: 非洲与大洋洲，不填默认为0</p>
 * @method void setRegionID(integer $RegionID) 设置<p>地域ID。0: 精选拨测点 1: 国内 2: 港澳台 3: 亚太 4: 欧洲与美洲 5: 非洲与大洋洲，不填默认为0</p>
 * @method integer getDistrictID() 获取<p>省份或国家ID。0表示全部，不填默认为0</p>
 * @method void setDistrictID(integer $DistrictID) 设置<p>省份或国家ID。0表示全部，不填默认为0</p>
 * @method integer getNetServiceID() 获取<p>运营商ID。0: 全部 1: 中国电信 2: 中国联通 3: 中国移动 99: 其他，不填默认为0</p>
 * @method void setNetServiceID(integer $NetServiceID) 设置<p>运营商ID。0: 全部 1: 中国电信 2: 中国联通 3: 中国移动 99: 其他，不填默认为0</p>
 * @method integer getNodeGroupType() 获取<p>节点组类型。0: 高级拨测点组 1: 可用性节点 2: 我的拨测点组，不填默认为0</p>
 * @method void setNodeGroupType(integer $NodeGroupType) 设置<p>节点组类型。0: 高级拨测点组 1: 可用性节点 2: 我的拨测点组，不填默认为0</p>
 * @method integer getTaskType() 获取<p>任务类型，如1、2、3、4、5、6、7；1-页面性能、2-文件上传、3-文件下载、4-端口性能、5-网络质量、6-音视频体验、7-域名whois，不填默认为0，不对任务类型做过滤</p>
 * @method void setTaskType(integer $TaskType) 设置<p>任务类型，如1、2、3、4、5、6、7；1-页面性能、2-文件上传、3-文件下载、4-端口性能、5-网络质量、6-音视频体验、7-域名whois，不填默认为0，不对任务类型做过滤</p>
 * @method integer getProbeType() 获取<p>测试类型，包含定时测试与即时测试。0-定时拨测，其它表示即时拨测。</p>
 * @method void setProbeType(integer $ProbeType) 设置<p>测试类型，包含定时测试与即时测试。0-定时拨测，其它表示即时拨测。</p>
 */
class DescribeNodeGroupsRequest extends AbstractModel
{
    /**
     * @var array <p>节点类型。0: 全部 1: IDC 2: LastMile 3: Mobile，不填默认为0</p>
     */
    public $NodeType;

    /**
     * @var integer <p>节点分类。0: 全部 1: PC 2：Mobile，不填默认为0。PC分类包括IDC和LM节点类型，Mobile分类包括Mobile节点类型。与NodeType参数取交集。</p>
     */
    public $TaskCategory;

    /**
     * @var integer <p>IP类型。0: 全部 1: IPv4 2: IPv6，不填默认为0</p>
     */
    public $IPType;

    /**
     * @var string <p>拨测点描述关键词。</p>
     */
    public $Name;

    /**
     * @var integer <p>地域ID。0: 精选拨测点 1: 国内 2: 港澳台 3: 亚太 4: 欧洲与美洲 5: 非洲与大洋洲，不填默认为0</p>
     */
    public $RegionID;

    /**
     * @var integer <p>省份或国家ID。0表示全部，不填默认为0</p>
     */
    public $DistrictID;

    /**
     * @var integer <p>运营商ID。0: 全部 1: 中国电信 2: 中国联通 3: 中国移动 99: 其他，不填默认为0</p>
     */
    public $NetServiceID;

    /**
     * @var integer <p>节点组类型。0: 高级拨测点组 1: 可用性节点 2: 我的拨测点组，不填默认为0</p>
     */
    public $NodeGroupType;

    /**
     * @var integer <p>任务类型，如1、2、3、4、5、6、7；1-页面性能、2-文件上传、3-文件下载、4-端口性能、5-网络质量、6-音视频体验、7-域名whois，不填默认为0，不对任务类型做过滤</p>
     */
    public $TaskType;

    /**
     * @var integer <p>测试类型，包含定时测试与即时测试。0-定时拨测，其它表示即时拨测。</p>
     */
    public $ProbeType;

    /**
     * @param array $NodeType <p>节点类型。0: 全部 1: IDC 2: LastMile 3: Mobile，不填默认为0</p>
     * @param integer $TaskCategory <p>节点分类。0: 全部 1: PC 2：Mobile，不填默认为0。PC分类包括IDC和LM节点类型，Mobile分类包括Mobile节点类型。与NodeType参数取交集。</p>
     * @param integer $IPType <p>IP类型。0: 全部 1: IPv4 2: IPv6，不填默认为0</p>
     * @param string $Name <p>拨测点描述关键词。</p>
     * @param integer $RegionID <p>地域ID。0: 精选拨测点 1: 国内 2: 港澳台 3: 亚太 4: 欧洲与美洲 5: 非洲与大洋洲，不填默认为0</p>
     * @param integer $DistrictID <p>省份或国家ID。0表示全部，不填默认为0</p>
     * @param integer $NetServiceID <p>运营商ID。0: 全部 1: 中国电信 2: 中国联通 3: 中国移动 99: 其他，不填默认为0</p>
     * @param integer $NodeGroupType <p>节点组类型。0: 高级拨测点组 1: 可用性节点 2: 我的拨测点组，不填默认为0</p>
     * @param integer $TaskType <p>任务类型，如1、2、3、4、5、6、7；1-页面性能、2-文件上传、3-文件下载、4-端口性能、5-网络质量、6-音视频体验、7-域名whois，不填默认为0，不对任务类型做过滤</p>
     * @param integer $ProbeType <p>测试类型，包含定时测试与即时测试。0-定时拨测，其它表示即时拨测。</p>
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
        if (array_key_exists("NodeType",$param) and $param["NodeType"] !== null) {
            $this->NodeType = $param["NodeType"];
        }

        if (array_key_exists("TaskCategory",$param) and $param["TaskCategory"] !== null) {
            $this->TaskCategory = $param["TaskCategory"];
        }

        if (array_key_exists("IPType",$param) and $param["IPType"] !== null) {
            $this->IPType = $param["IPType"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("RegionID",$param) and $param["RegionID"] !== null) {
            $this->RegionID = $param["RegionID"];
        }

        if (array_key_exists("DistrictID",$param) and $param["DistrictID"] !== null) {
            $this->DistrictID = $param["DistrictID"];
        }

        if (array_key_exists("NetServiceID",$param) and $param["NetServiceID"] !== null) {
            $this->NetServiceID = $param["NetServiceID"];
        }

        if (array_key_exists("NodeGroupType",$param) and $param["NodeGroupType"] !== null) {
            $this->NodeGroupType = $param["NodeGroupType"];
        }

        if (array_key_exists("TaskType",$param) and $param["TaskType"] !== null) {
            $this->TaskType = $param["TaskType"];
        }

        if (array_key_exists("ProbeType",$param) and $param["ProbeType"] !== null) {
            $this->ProbeType = $param["ProbeType"];
        }
    }
}
