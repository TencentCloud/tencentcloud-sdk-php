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
namespace TencentCloud\Cfs\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateDataRetrieval请求参数结构体
 *
 * @method string getFileSystemId() 获取<p>文件系统实例 ID，通过查询文件系统 DescribeCfsFileSystems 获取 示例值：cfs-xxxxxx</p>
 * @method void setFileSystemId(string $FileSystemId) 设置<p>文件系统实例 ID，通过查询文件系统 DescribeCfsFileSystems 获取 示例值：cfs-xxxxxx</p>
 * @method string getDataRetrievalName() 获取<p>数据检索名称 示例值：DataDive</p>
 * @method void setDataRetrievalName(string $DataRetrievalName) 设置<p>数据检索名称 示例值：DataDive</p>
 * @method string getCompoundCondition() 获取<p>聚合检索条件 示例值：from entries|where size &gt;4096</p>
 * @method void setCompoundCondition(string $CompoundCondition) 设置<p>聚合检索条件 示例值：from entries|where size &gt;4096</p>
 * @method string getQueryCondition() 获取<p>列表检索条件</p>
 * @method void setQueryCondition(string $QueryCondition) 设置<p>列表检索条件</p>
 * @method string getDayOfMonth() 获取<p>数据检索按月重复，每月1-31号，选择一天，每月将在这一天自动创建快照；例如1 代表1号；与DayOfWeek二选一 示例值：1</p>
 * @method void setDayOfMonth(string $DayOfMonth) 设置<p>数据检索按月重复，每月1-31号，选择一天，每月将在这一天自动创建快照；例如1 代表1号；与DayOfWeek二选一 示例值：1</p>
 * @method string getDayOfWeek() 获取<p>数据检索重复日期，星期一到星期日。 1代表星期一、7代表星期天，与DayOfMonth，二选一 示例值：2,3</p>
 * @method void setDayOfWeek(string $DayOfWeek) 设置<p>数据检索重复日期，星期一到星期日。 1代表星期一、7代表星期天，与DayOfMonth，二选一 示例值：2,3</p>
 * @method string getHour() 获取<p>重复时间点,0-23，小时 示例值：1,3,5</p>
 * @method void setHour(string $Hour) 设置<p>重复时间点,0-23，小时 示例值：1,3,5</p>
 */
class CreateDataRetrievalRequest extends AbstractModel
{
    /**
     * @var string <p>文件系统实例 ID，通过查询文件系统 DescribeCfsFileSystems 获取 示例值：cfs-xxxxxx</p>
     */
    public $FileSystemId;

    /**
     * @var string <p>数据检索名称 示例值：DataDive</p>
     */
    public $DataRetrievalName;

    /**
     * @var string <p>聚合检索条件 示例值：from entries|where size &gt;4096</p>
     */
    public $CompoundCondition;

    /**
     * @var string <p>列表检索条件</p>
     */
    public $QueryCondition;

    /**
     * @var string <p>数据检索按月重复，每月1-31号，选择一天，每月将在这一天自动创建快照；例如1 代表1号；与DayOfWeek二选一 示例值：1</p>
     */
    public $DayOfMonth;

    /**
     * @var string <p>数据检索重复日期，星期一到星期日。 1代表星期一、7代表星期天，与DayOfMonth，二选一 示例值：2,3</p>
     */
    public $DayOfWeek;

    /**
     * @var string <p>重复时间点,0-23，小时 示例值：1,3,5</p>
     */
    public $Hour;

    /**
     * @param string $FileSystemId <p>文件系统实例 ID，通过查询文件系统 DescribeCfsFileSystems 获取 示例值：cfs-xxxxxx</p>
     * @param string $DataRetrievalName <p>数据检索名称 示例值：DataDive</p>
     * @param string $CompoundCondition <p>聚合检索条件 示例值：from entries|where size &gt;4096</p>
     * @param string $QueryCondition <p>列表检索条件</p>
     * @param string $DayOfMonth <p>数据检索按月重复，每月1-31号，选择一天，每月将在这一天自动创建快照；例如1 代表1号；与DayOfWeek二选一 示例值：1</p>
     * @param string $DayOfWeek <p>数据检索重复日期，星期一到星期日。 1代表星期一、7代表星期天，与DayOfMonth，二选一 示例值：2,3</p>
     * @param string $Hour <p>重复时间点,0-23，小时 示例值：1,3,5</p>
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
        if (array_key_exists("FileSystemId",$param) and $param["FileSystemId"] !== null) {
            $this->FileSystemId = $param["FileSystemId"];
        }

        if (array_key_exists("DataRetrievalName",$param) and $param["DataRetrievalName"] !== null) {
            $this->DataRetrievalName = $param["DataRetrievalName"];
        }

        if (array_key_exists("CompoundCondition",$param) and $param["CompoundCondition"] !== null) {
            $this->CompoundCondition = $param["CompoundCondition"];
        }

        if (array_key_exists("QueryCondition",$param) and $param["QueryCondition"] !== null) {
            $this->QueryCondition = $param["QueryCondition"];
        }

        if (array_key_exists("DayOfMonth",$param) and $param["DayOfMonth"] !== null) {
            $this->DayOfMonth = $param["DayOfMonth"];
        }

        if (array_key_exists("DayOfWeek",$param) and $param["DayOfWeek"] !== null) {
            $this->DayOfWeek = $param["DayOfWeek"];
        }

        if (array_key_exists("Hour",$param) and $param["Hour"] !== null) {
            $this->Hour = $param["Hour"];
        }
    }
}
