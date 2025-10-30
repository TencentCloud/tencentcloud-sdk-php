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
namespace TencentCloud\Iotvideoindustry\V20201201\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeScene返回参数结构体
 *
 * @method integer getIntId() 获取场景ID
 * @method void setIntId(integer $IntId) 设置场景ID
 * @method integer getRecordDuration() 获取录制时长(秒)
 * @method void setRecordDuration(integer $RecordDuration) 设置录制时长(秒)
 * @method string getSceneName() 获取场景名称
 * @method void setSceneName(string $SceneName) 设置场景名称
 * @method string getSceneTrigger() 获取场景触发规则
 * @method void setSceneTrigger(string $SceneTrigger) 设置场景触发规则
 * @method integer getStoreDuration() 获取存储时长 (天)
 * @method void setStoreDuration(integer $StoreDuration) 设置存储时长 (天)
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 * @method string getUpdateTime() 获取更新时间
 * @method void setUpdateTime(string $UpdateTime) 设置更新时间
 * @method string getUin() 获取用户Uin
 * @method void setUin(string $Uin) 设置用户Uin
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeSceneResponse extends AbstractModel
{
    /**
     * @var integer 场景ID
     */
    public $IntId;

    /**
     * @var integer 录制时长(秒)
     */
    public $RecordDuration;

    /**
     * @var string 场景名称
     */
    public $SceneName;

    /**
     * @var string 场景触发规则
     */
    public $SceneTrigger;

    /**
     * @var integer 存储时长 (天)
     */
    public $StoreDuration;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @var string 更新时间
     */
    public $UpdateTime;

    /**
     * @var string 用户Uin
     */
    public $Uin;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $IntId 场景ID
     * @param integer $RecordDuration 录制时长(秒)
     * @param string $SceneName 场景名称
     * @param string $SceneTrigger 场景触发规则
     * @param integer $StoreDuration 存储时长 (天)
     * @param string $CreateTime 创建时间
     * @param string $UpdateTime 更新时间
     * @param string $Uin 用户Uin
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
        if (array_key_exists("IntId",$param) and $param["IntId"] !== null) {
            $this->IntId = $param["IntId"];
        }

        if (array_key_exists("RecordDuration",$param) and $param["RecordDuration"] !== null) {
            $this->RecordDuration = $param["RecordDuration"];
        }

        if (array_key_exists("SceneName",$param) and $param["SceneName"] !== null) {
            $this->SceneName = $param["SceneName"];
        }

        if (array_key_exists("SceneTrigger",$param) and $param["SceneTrigger"] !== null) {
            $this->SceneTrigger = $param["SceneTrigger"];
        }

        if (array_key_exists("StoreDuration",$param) and $param["StoreDuration"] !== null) {
            $this->StoreDuration = $param["StoreDuration"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
