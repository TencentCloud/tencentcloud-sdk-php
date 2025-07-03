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
namespace TencentCloud\Cat\V20180409\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeNodeGroups请求参数结构体
 *
 * @method array getNodeType() 获取节点类型。0: 全部 1: IDC 2: LastMile 3: Mobile，不填默认为0
 * @method void setNodeType(array $NodeType) 设置节点类型。0: 全部 1: IDC 2: LastMile 3: Mobile，不填默认为0
 * @method integer getTaskCategory() 获取节点分类。0: 全部 1: PC 2：Mobile，不填默认为0。PC分类包括IDC和LM节点类型，Mobile分类包括Mobile节点类型。与NodeType参数取交集。
 * @method void setTaskCategory(integer $TaskCategory) 设置节点分类。0: 全部 1: PC 2：Mobile，不填默认为0。PC分类包括IDC和LM节点类型，Mobile分类包括Mobile节点类型。与NodeType参数取交集。
 * @method integer getIPType() 获取IP类型。0: 全部 1: IPv4 2: IPv6，不填默认为0
 * @method void setIPType(integer $IPType) 设置IP类型。0: 全部 1: IPv4 2: IPv6，不填默认为0
 * @method string getName() 获取拨测点描述关键词。
 * @method void setName(string $Name) 设置拨测点描述关键词。
 * @method integer getRegionID() 获取地域ID。0: 精选拨测点 1: 国内 2: 港澳台 3: 亚太 4: 欧洲与美洲 5: 非洲与大洋洲，不填默认为0
 * @method void setRegionID(integer $RegionID) 设置地域ID。0: 精选拨测点 1: 国内 2: 港澳台 3: 亚太 4: 欧洲与美洲 5: 非洲与大洋洲，不填默认为0
 * @method integer getDistrictID() 获取省份或国家ID。0表示全部，不填默认为0
 * @method void setDistrictID(integer $DistrictID) 设置省份或国家ID。0表示全部，不填默认为0
 * @method integer getNetServiceID() 获取运营商ID。0: 全部 1: 中国电信 2: 中国联通 3: 中国移动 99: 其他，不填默认为0
 * @method void setNetServiceID(integer $NetServiceID) 设置运营商ID。0: 全部 1: 中国电信 2: 中国联通 3: 中国移动 99: 其他，不填默认为0
 * @method integer getNodeGroupType() 获取节点组类型。0: 高级拨测点组 1: 可用性节点 2: 我的拨测点组，不填默认为0
 * @method void setNodeGroupType(integer $NodeGroupType) 设置节点组类型。0: 高级拨测点组 1: 可用性节点 2: 我的拨测点组，不填默认为0
 * @method integer getTaskType() 获取任务类型，如1、2、3、4、5、6、7；1-页面性能、2-文件上传、3-文件下载、4-端口性能、5-网络质量、6-音视频体验、7-域名whois，不填默认为0，不对任务类型做过滤
 * @method void setTaskType(integer $TaskType) 设置任务类型，如1、2、3、4、5、6、7；1-页面性能、2-文件上传、3-文件下载、4-端口性能、5-网络质量、6-音视频体验、7-域名whois，不填默认为0，不对任务类型做过滤
 * @method integer getProbeType() 获取测试类型，包含定时测试与即时测试。0-定时拨测，其它表示即时拨测。
 * @method void setProbeType(integer $ProbeType) 设置测试类型，包含定时测试与即时测试。0-定时拨测，其它表示即时拨测。
 */
class DescribeNodeGroupsRequest extends AbstractModel
{
    /**
     * @var array 节点类型。0: 全部 1: IDC 2: LastMile 3: Mobile，不填默认为0
     */
    public $NodeType;

    /**
     * @var integer 节点分类。0: 全部 1: PC 2：Mobile，不填默认为0。PC分类包括IDC和LM节点类型，Mobile分类包括Mobile节点类型。与NodeType参数取交集。
     */
    public $TaskCategory;

    /**
     * @var integer IP类型。0: 全部 1: IPv4 2: IPv6，不填默认为0
     */
    public $IPType;

    /**
     * @var string 拨测点描述关键词。
     */
    public $Name;

    /**
     * @var integer 地域ID。0: 精选拨测点 1: 国内 2: 港澳台 3: 亚太 4: 欧洲与美洲 5: 非洲与大洋洲，不填默认为0
     */
    public $RegionID;

    /**
     * @var integer 省份或国家ID。0表示全部，不填默认为0
     */
    public $DistrictID;

    /**
     * @var integer 运营商ID。0: 全部 1: 中国电信 2: 中国联通 3: 中国移动 99: 其他，不填默认为0
     */
    public $NetServiceID;

    /**
     * @var integer 节点组类型。0: 高级拨测点组 1: 可用性节点 2: 我的拨测点组，不填默认为0
     */
    public $NodeGroupType;

    /**
     * @var integer 任务类型，如1、2、3、4、5、6、7；1-页面性能、2-文件上传、3-文件下载、4-端口性能、5-网络质量、6-音视频体验、7-域名whois，不填默认为0，不对任务类型做过滤
     */
    public $TaskType;

    /**
     * @var integer 测试类型，包含定时测试与即时测试。0-定时拨测，其它表示即时拨测。
     */
    public $ProbeType;

    /**
     * @param array $NodeType 节点类型。0: 全部 1: IDC 2: LastMile 3: Mobile，不填默认为0
     * @param integer $TaskCategory 节点分类。0: 全部 1: PC 2：Mobile，不填默认为0。PC分类包括IDC和LM节点类型，Mobile分类包括Mobile节点类型。与NodeType参数取交集。
     * @param integer $IPType IP类型。0: 全部 1: IPv4 2: IPv6，不填默认为0
     * @param string $Name 拨测点描述关键词。
     * @param integer $RegionID 地域ID。0: 精选拨测点 1: 国内 2: 港澳台 3: 亚太 4: 欧洲与美洲 5: 非洲与大洋洲，不填默认为0
     * @param integer $DistrictID 省份或国家ID。0表示全部，不填默认为0
     * @param integer $NetServiceID 运营商ID。0: 全部 1: 中国电信 2: 中国联通 3: 中国移动 99: 其他，不填默认为0
     * @param integer $NodeGroupType 节点组类型。0: 高级拨测点组 1: 可用性节点 2: 我的拨测点组，不填默认为0
     * @param integer $TaskType 任务类型，如1、2、3、4、5、6、7；1-页面性能、2-文件上传、3-文件下载、4-端口性能、5-网络质量、6-音视频体验、7-域名whois，不填默认为0，不对任务类型做过滤
     * @param integer $ProbeType 测试类型，包含定时测试与即时测试。0-定时拨测，其它表示即时拨测。
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
