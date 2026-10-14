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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeBackups请求参数结构体
 *
 * @method string getInstanceId() 获取<p>实例 ID，格式如：cdb-c1nl9rpv。与云数据库控制台页面中显示的实例 ID 相同。</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>实例 ID，格式如：cdb-c1nl9rpv。与云数据库控制台页面中显示的实例 ID 相同。</p>
 * @method integer getOffset() 获取<p>偏移量，最小值为0。</p>
 * @method void setOffset(integer $Offset) 设置<p>偏移量，最小值为0。</p>
 * @method integer getLimit() 获取<p>分页大小，默认值为20，最小值为1，最大值为1000。</p>
 * @method void setLimit(integer $Limit) 设置<p>分页大小，默认值为20，最小值为1，最大值为1000。</p>
 * @method string getMinStartTime() 获取<p>备份开始时间，筛选大于等于此值，时间格式：2016-03-17 02:10:37</p>
 * @method void setMinStartTime(string $MinStartTime) 设置<p>备份开始时间，筛选大于等于此值，时间格式：2016-03-17 02:10:37</p>
 * @method string getMaxStartTime() 获取<p>备份开始时间，筛选小于等于此值，时间格式：2016-03-17 02:10:37</p>
 * @method void setMaxStartTime(string $MaxStartTime) 设置<p>备份开始时间，筛选小于等于此值，时间格式：2016-03-17 02:10:37</p>
 */
class DescribeBackupsRequest extends AbstractModel
{
    /**
     * @var string <p>实例 ID，格式如：cdb-c1nl9rpv。与云数据库控制台页面中显示的实例 ID 相同。</p>
     */
    public $InstanceId;

    /**
     * @var integer <p>偏移量，最小值为0。</p>
     */
    public $Offset;

    /**
     * @var integer <p>分页大小，默认值为20，最小值为1，最大值为1000。</p>
     */
    public $Limit;

    /**
     * @var string <p>备份开始时间，筛选大于等于此值，时间格式：2016-03-17 02:10:37</p>
     */
    public $MinStartTime;

    /**
     * @var string <p>备份开始时间，筛选小于等于此值，时间格式：2016-03-17 02:10:37</p>
     */
    public $MaxStartTime;

    /**
     * @param string $InstanceId <p>实例 ID，格式如：cdb-c1nl9rpv。与云数据库控制台页面中显示的实例 ID 相同。</p>
     * @param integer $Offset <p>偏移量，最小值为0。</p>
     * @param integer $Limit <p>分页大小，默认值为20，最小值为1，最大值为1000。</p>
     * @param string $MinStartTime <p>备份开始时间，筛选大于等于此值，时间格式：2016-03-17 02:10:37</p>
     * @param string $MaxStartTime <p>备份开始时间，筛选小于等于此值，时间格式：2016-03-17 02:10:37</p>
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

        if (array_key_exists("MinStartTime",$param) and $param["MinStartTime"] !== null) {
            $this->MinStartTime = $param["MinStartTime"];
        }

        if (array_key_exists("MaxStartTime",$param) and $param["MaxStartTime"] !== null) {
            $this->MaxStartTime = $param["MaxStartTime"];
        }
    }
}
