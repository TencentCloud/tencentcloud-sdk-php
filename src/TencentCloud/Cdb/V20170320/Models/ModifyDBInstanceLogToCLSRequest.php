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
 * ModifyDBInstanceLogToCLS请求参数结构体
 *
 * @method string getInstanceId() 获取实例 ID，可通过 [DescribeDBInstances](https://cloud.tencent.com/document/product/236/15872) 接口获取。
 * @method void setInstanceId(string $InstanceId) 设置实例 ID，可通过 [DescribeDBInstances](https://cloud.tencent.com/document/product/236/15872) 接口获取。
 * @method string getLogType() 获取日志类型。error：错误日志，slowlog：慢日志。
 * @method void setLogType(string $LogType) 设置日志类型。error：错误日志，slowlog：慢日志。
 * @method string getStatus() 获取投递状态。ON：开启，OFF：关闭。
 * @method void setStatus(string $Status) 设置投递状态。ON：开启，OFF：关闭。
 * @method boolean getCreateLogset() 获取是否需要创建日志集。默认为 false。
 * @method void setCreateLogset(boolean $CreateLogset) 设置是否需要创建日志集。默认为 false。
 * @method string getLogset() 获取需要创建日志集时为日志集名称；选择已有日志集时，为日志集 ID。默认为空。
说明：当参数 Status 的值为 ON 时，Logset 和 LogTopic 参数必须填一个。
 * @method void setLogset(string $Logset) 设置需要创建日志集时为日志集名称；选择已有日志集时，为日志集 ID。默认为空。
说明：当参数 Status 的值为 ON 时，Logset 和 LogTopic 参数必须填一个。
 * @method boolean getCreateLogTopic() 获取是否需要创建日志主题。默认为 false。
 * @method void setCreateLogTopic(boolean $CreateLogTopic) 设置是否需要创建日志主题。默认为 false。
 * @method string getLogTopic() 获取需要创建日志主题时为日志主题名称；选择已有日志主题时，为日志主题 ID。默认为空。
说明：当参数 Status 的值为 ON 时，Logset 和 LogTopic 参数必须填一个。
 * @method void setLogTopic(string $LogTopic) 设置需要创建日志主题时为日志主题名称；选择已有日志主题时，为日志主题 ID。默认为空。
说明：当参数 Status 的值为 ON 时，Logset 和 LogTopic 参数必须填一个。
 * @method integer getPeriod() 获取日志主题有效期，不填写时，默认30天，最大值3600。
 * @method void setPeriod(integer $Period) 设置日志主题有效期，不填写时，默认30天，最大值3600。
 * @method boolean getCreateIndex() 获取创建日志主题时，是否创建索引，默认为 false。
 * @method void setCreateIndex(boolean $CreateIndex) 设置创建日志主题时，是否创建索引，默认为 false。
 * @method string getClsRegion() 获取CLS 所在地域，不填择默认为 Region 的参数值。
 * @method void setClsRegion(string $ClsRegion) 设置CLS 所在地域，不填择默认为 Region 的参数值。
 */
class ModifyDBInstanceLogToCLSRequest extends AbstractModel
{
    /**
     * @var string 实例 ID，可通过 [DescribeDBInstances](https://cloud.tencent.com/document/product/236/15872) 接口获取。
     */
    public $InstanceId;

    /**
     * @var string 日志类型。error：错误日志，slowlog：慢日志。
     */
    public $LogType;

    /**
     * @var string 投递状态。ON：开启，OFF：关闭。
     */
    public $Status;

    /**
     * @var boolean 是否需要创建日志集。默认为 false。
     */
    public $CreateLogset;

    /**
     * @var string 需要创建日志集时为日志集名称；选择已有日志集时，为日志集 ID。默认为空。
说明：当参数 Status 的值为 ON 时，Logset 和 LogTopic 参数必须填一个。
     */
    public $Logset;

    /**
     * @var boolean 是否需要创建日志主题。默认为 false。
     */
    public $CreateLogTopic;

    /**
     * @var string 需要创建日志主题时为日志主题名称；选择已有日志主题时，为日志主题 ID。默认为空。
说明：当参数 Status 的值为 ON 时，Logset 和 LogTopic 参数必须填一个。
     */
    public $LogTopic;

    /**
     * @var integer 日志主题有效期，不填写时，默认30天，最大值3600。
     */
    public $Period;

    /**
     * @var boolean 创建日志主题时，是否创建索引，默认为 false。
     */
    public $CreateIndex;

    /**
     * @var string CLS 所在地域，不填择默认为 Region 的参数值。
     */
    public $ClsRegion;

    /**
     * @param string $InstanceId 实例 ID，可通过 [DescribeDBInstances](https://cloud.tencent.com/document/product/236/15872) 接口获取。
     * @param string $LogType 日志类型。error：错误日志，slowlog：慢日志。
     * @param string $Status 投递状态。ON：开启，OFF：关闭。
     * @param boolean $CreateLogset 是否需要创建日志集。默认为 false。
     * @param string $Logset 需要创建日志集时为日志集名称；选择已有日志集时，为日志集 ID。默认为空。
说明：当参数 Status 的值为 ON 时，Logset 和 LogTopic 参数必须填一个。
     * @param boolean $CreateLogTopic 是否需要创建日志主题。默认为 false。
     * @param string $LogTopic 需要创建日志主题时为日志主题名称；选择已有日志主题时，为日志主题 ID。默认为空。
说明：当参数 Status 的值为 ON 时，Logset 和 LogTopic 参数必须填一个。
     * @param integer $Period 日志主题有效期，不填写时，默认30天，最大值3600。
     * @param boolean $CreateIndex 创建日志主题时，是否创建索引，默认为 false。
     * @param string $ClsRegion CLS 所在地域，不填择默认为 Region 的参数值。
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

        if (array_key_exists("LogType",$param) and $param["LogType"] !== null) {
            $this->LogType = $param["LogType"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CreateLogset",$param) and $param["CreateLogset"] !== null) {
            $this->CreateLogset = $param["CreateLogset"];
        }

        if (array_key_exists("Logset",$param) and $param["Logset"] !== null) {
            $this->Logset = $param["Logset"];
        }

        if (array_key_exists("CreateLogTopic",$param) and $param["CreateLogTopic"] !== null) {
            $this->CreateLogTopic = $param["CreateLogTopic"];
        }

        if (array_key_exists("LogTopic",$param) and $param["LogTopic"] !== null) {
            $this->LogTopic = $param["LogTopic"];
        }

        if (array_key_exists("Period",$param) and $param["Period"] !== null) {
            $this->Period = $param["Period"];
        }

        if (array_key_exists("CreateIndex",$param) and $param["CreateIndex"] !== null) {
            $this->CreateIndex = $param["CreateIndex"];
        }

        if (array_key_exists("ClsRegion",$param) and $param["ClsRegion"] !== null) {
            $this->ClsRegion = $param["ClsRegion"];
        }
    }
}
