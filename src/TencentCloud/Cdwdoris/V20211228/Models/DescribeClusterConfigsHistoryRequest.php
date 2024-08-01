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
namespace TencentCloud\Cdwdoris\V20211228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeClusterConfigsHistory请求参数结构体
 *
 * @method string getInstanceId() 获取集群id名称
 * @method void setInstanceId(string $InstanceId) 设置集群id名称
 * @method integer getOffset() 获取分页参数，第一页为0，第二页为10
 * @method void setOffset(integer $Offset) 设置分页参数，第一页为0，第二页为10
 * @method integer getLimit() 获取分页参数，分页步长，默认为10
 * @method void setLimit(integer $Limit) 设置分页参数，分页步长，默认为10
 * @method string getStartTime() 获取配置修改历史的时间范围开始
 * @method void setStartTime(string $StartTime) 设置配置修改历史的时间范围开始
 * @method string getEndTime() 获取配置修改历史的时间范围结束
 * @method void setEndTime(string $EndTime) 设置配置修改历史的时间范围结束
 * @method array getConfigFileNames() 获取需要查询的配置文件名称数组，如果为空则查询全部历史记录。目前支持的配置文件名称有：
apache_hdfs_broker.conf、be.conf、fe.conf、core-site.xml、hdfs-site.xml、odbcinst.ini
 * @method void setConfigFileNames(array $ConfigFileNames) 设置需要查询的配置文件名称数组，如果为空则查询全部历史记录。目前支持的配置文件名称有：
apache_hdfs_broker.conf、be.conf、fe.conf、core-site.xml、hdfs-site.xml、odbcinst.ini
 */
class DescribeClusterConfigsHistoryRequest extends AbstractModel
{
    /**
     * @var string 集群id名称
     */
    public $InstanceId;

    /**
     * @var integer 分页参数，第一页为0，第二页为10
     */
    public $Offset;

    /**
     * @var integer 分页参数，分页步长，默认为10
     */
    public $Limit;

    /**
     * @var string 配置修改历史的时间范围开始
     */
    public $StartTime;

    /**
     * @var string 配置修改历史的时间范围结束
     */
    public $EndTime;

    /**
     * @var array 需要查询的配置文件名称数组，如果为空则查询全部历史记录。目前支持的配置文件名称有：
apache_hdfs_broker.conf、be.conf、fe.conf、core-site.xml、hdfs-site.xml、odbcinst.ini
     */
    public $ConfigFileNames;

    /**
     * @param string $InstanceId 集群id名称
     * @param integer $Offset 分页参数，第一页为0，第二页为10
     * @param integer $Limit 分页参数，分页步长，默认为10
     * @param string $StartTime 配置修改历史的时间范围开始
     * @param string $EndTime 配置修改历史的时间范围结束
     * @param array $ConfigFileNames 需要查询的配置文件名称数组，如果为空则查询全部历史记录。目前支持的配置文件名称有：
apache_hdfs_broker.conf、be.conf、fe.conf、core-site.xml、hdfs-site.xml、odbcinst.ini
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("ConfigFileNames",$param) and $param["ConfigFileNames"] !== null) {
            $this->ConfigFileNames = $param["ConfigFileNames"];
        }
    }
}
