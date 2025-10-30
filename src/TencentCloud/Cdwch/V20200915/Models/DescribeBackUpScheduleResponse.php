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
namespace TencentCloud\Cdwch\V20200915\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeBackUpSchedule返回参数结构体
 *
 * @method boolean getBackUpOpened() 获取备份是否开启
 * @method void setBackUpOpened(boolean $BackUpOpened) 设置备份是否开启
 * @method ScheduleStrategy getMetaStrategy() 获取元数据备份策略
 * @method void setMetaStrategy(ScheduleStrategy $MetaStrategy) 设置元数据备份策略
 * @method ScheduleStrategy getDataStrategy() 获取表数据备份策略
 * @method void setDataStrategy(ScheduleStrategy $DataStrategy) 设置表数据备份策略
 * @method array getBackUpContents() 获取备份表列表
 * @method void setBackUpContents(array $BackUpContents) 设置备份表列表
 * @method integer getBackUpStatus() 获取备份的状态
 * @method void setBackUpStatus(integer $BackUpStatus) 设置备份的状态
 * @method string getErrorMsg() 获取错误信息
 * @method void setErrorMsg(string $ErrorMsg) 设置错误信息
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeBackUpScheduleResponse extends AbstractModel
{
    /**
     * @var boolean 备份是否开启
     */
    public $BackUpOpened;

    /**
     * @var ScheduleStrategy 元数据备份策略
     */
    public $MetaStrategy;

    /**
     * @var ScheduleStrategy 表数据备份策略
     */
    public $DataStrategy;

    /**
     * @var array 备份表列表
     */
    public $BackUpContents;

    /**
     * @var integer 备份的状态
     */
    public $BackUpStatus;

    /**
     * @var string 错误信息
     */
    public $ErrorMsg;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param boolean $BackUpOpened 备份是否开启
     * @param ScheduleStrategy $MetaStrategy 元数据备份策略
     * @param ScheduleStrategy $DataStrategy 表数据备份策略
     * @param array $BackUpContents 备份表列表
     * @param integer $BackUpStatus 备份的状态
     * @param string $ErrorMsg 错误信息
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("BackUpOpened",$param) and $param["BackUpOpened"] !== null) {
            $this->BackUpOpened = $param["BackUpOpened"];
        }

        if (array_key_exists("MetaStrategy",$param) and $param["MetaStrategy"] !== null) {
            $this->MetaStrategy = new ScheduleStrategy();
            $this->MetaStrategy->deserialize($param["MetaStrategy"]);
        }

        if (array_key_exists("DataStrategy",$param) and $param["DataStrategy"] !== null) {
            $this->DataStrategy = new ScheduleStrategy();
            $this->DataStrategy->deserialize($param["DataStrategy"]);
        }

        if (array_key_exists("BackUpContents",$param) and $param["BackUpContents"] !== null) {
            $this->BackUpContents = [];
            foreach ($param["BackUpContents"] as $key => $value){
                $obj = new BackupTableContent();
                $obj->deserialize($value);
                array_push($this->BackUpContents, $obj);
            }
        }

        if (array_key_exists("BackUpStatus",$param) and $param["BackUpStatus"] !== null) {
            $this->BackUpStatus = $param["BackUpStatus"];
        }

        if (array_key_exists("ErrorMsg",$param) and $param["ErrorMsg"] !== null) {
            $this->ErrorMsg = $param["ErrorMsg"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
