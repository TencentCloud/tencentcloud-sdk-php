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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeApiDetail返回参数结构体
 *
 * @method string getLog() 获取请求样例，json字符串格式
 * @method void setLog(string $Log) 设置请求样例，json字符串格式
 * @method array getParameterList() 获取请求参数样例列表
 * @method void setParameterList(array $ParameterList) 设置请求参数样例列表
 * @method string getScene() 获取当前场景标签
 * @method void setScene(string $Scene) 设置当前场景标签
 * @method array getSensitiveFields() 获取敏感字段
 * @method void setSensitiveFields(array $SensitiveFields) 设置敏感字段
 * @method boolean getIsActive() 获取7天内是否活跃
 * @method void setIsActive(boolean $IsActive) 设置7天内是否活跃
 * @method integer getIpCount() 获取访问ip数
 * @method void setIpCount(integer $IpCount) 设置访问ip数
 * @method integer getRegionCount() 获取访问地域数量
 * @method void setRegionCount(integer $RegionCount) 设置访问地域数量
 * @method integer getEventCount() 获取关联事件数
 * @method void setEventCount(integer $EventCount) 设置关联事件数
 * @method integer getSensitiveCount() 获取涉敏数据条数
 * @method void setSensitiveCount(integer $SensitiveCount) 设置涉敏数据条数
 * @method integer getLevel() 获取风险等级
 * @method void setLevel(integer $Level) 设置风险等级
 * @method string getRspLog() 获取响应体
 * @method void setRspLog(string $RspLog) 设置响应体
 * @method integer getMaxQPS() 获取昨日访问峰值QPS
 * @method void setMaxQPS(integer $MaxQPS) 设置昨日访问峰值QPS
 * @method array getApiDetailSampleHistory() 获取历史样例
 * @method void setApiDetailSampleHistory(array $ApiDetailSampleHistory) 设置历史样例
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeApiDetailResponse extends AbstractModel
{
    /**
     * @var string 请求样例，json字符串格式
     */
    public $Log;

    /**
     * @var array 请求参数样例列表
     */
    public $ParameterList;

    /**
     * @var string 当前场景标签
     */
    public $Scene;

    /**
     * @var array 敏感字段
     */
    public $SensitiveFields;

    /**
     * @var boolean 7天内是否活跃
     */
    public $IsActive;

    /**
     * @var integer 访问ip数
     */
    public $IpCount;

    /**
     * @var integer 访问地域数量
     */
    public $RegionCount;

    /**
     * @var integer 关联事件数
     */
    public $EventCount;

    /**
     * @var integer 涉敏数据条数
     */
    public $SensitiveCount;

    /**
     * @var integer 风险等级
     */
    public $Level;

    /**
     * @var string 响应体
     */
    public $RspLog;

    /**
     * @var integer 昨日访问峰值QPS
     */
    public $MaxQPS;

    /**
     * @var array 历史样例
     */
    public $ApiDetailSampleHistory;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $Log 请求样例，json字符串格式
     * @param array $ParameterList 请求参数样例列表
     * @param string $Scene 当前场景标签
     * @param array $SensitiveFields 敏感字段
     * @param boolean $IsActive 7天内是否活跃
     * @param integer $IpCount 访问ip数
     * @param integer $RegionCount 访问地域数量
     * @param integer $EventCount 关联事件数
     * @param integer $SensitiveCount 涉敏数据条数
     * @param integer $Level 风险等级
     * @param string $RspLog 响应体
     * @param integer $MaxQPS 昨日访问峰值QPS
     * @param array $ApiDetailSampleHistory 历史样例
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
        if (array_key_exists("Log",$param) and $param["Log"] !== null) {
            $this->Log = $param["Log"];
        }

        if (array_key_exists("ParameterList",$param) and $param["ParameterList"] !== null) {
            $this->ParameterList = [];
            foreach ($param["ParameterList"] as $key => $value){
                $obj = new ApiParameterType();
                $obj->deserialize($value);
                array_push($this->ParameterList, $obj);
            }
        }

        if (array_key_exists("Scene",$param) and $param["Scene"] !== null) {
            $this->Scene = $param["Scene"];
        }

        if (array_key_exists("SensitiveFields",$param) and $param["SensitiveFields"] !== null) {
            $this->SensitiveFields = $param["SensitiveFields"];
        }

        if (array_key_exists("IsActive",$param) and $param["IsActive"] !== null) {
            $this->IsActive = $param["IsActive"];
        }

        if (array_key_exists("IpCount",$param) and $param["IpCount"] !== null) {
            $this->IpCount = $param["IpCount"];
        }

        if (array_key_exists("RegionCount",$param) and $param["RegionCount"] !== null) {
            $this->RegionCount = $param["RegionCount"];
        }

        if (array_key_exists("EventCount",$param) and $param["EventCount"] !== null) {
            $this->EventCount = $param["EventCount"];
        }

        if (array_key_exists("SensitiveCount",$param) and $param["SensitiveCount"] !== null) {
            $this->SensitiveCount = $param["SensitiveCount"];
        }

        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }

        if (array_key_exists("RspLog",$param) and $param["RspLog"] !== null) {
            $this->RspLog = $param["RspLog"];
        }

        if (array_key_exists("MaxQPS",$param) and $param["MaxQPS"] !== null) {
            $this->MaxQPS = $param["MaxQPS"];
        }

        if (array_key_exists("ApiDetailSampleHistory",$param) and $param["ApiDetailSampleHistory"] !== null) {
            $this->ApiDetailSampleHistory = [];
            foreach ($param["ApiDetailSampleHistory"] as $key => $value){
                $obj = new ApiDetailSampleHistory();
                $obj->deserialize($value);
                array_push($this->ApiDetailSampleHistory, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
