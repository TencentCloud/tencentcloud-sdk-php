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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 大屏基线信息
 *
 * @method string getName() 获取基线名
 * @method void setName(string $Name) 设置基线名
 * @method integer getLevel() 获取危害等级：1-低危；2-中危；3-高危；4-严重
 * @method void setLevel(integer $Level) 设置危害等级：1-低危；2-中危；3-高危；4-严重
 * @method integer getCategoryId() 获取基线id
 * @method void setCategoryId(integer $CategoryId) 设置基线id
 * @method string getLastScanTime() 获取最后检测时间
 * @method void setLastScanTime(string $LastScanTime) 设置最后检测时间
 * @method integer getBaselineFailCount() 获取基线风险项
 * @method void setBaselineFailCount(integer $BaselineFailCount) 设置基线风险项
 * @method string getUuid() 获取主机uuid
 * @method void setUuid(string $Uuid) 设置主机uuid
 */
class ScreenBaselineInfo extends AbstractModel
{
    /**
     * @var string 基线名
     */
    public $Name;

    /**
     * @var integer 危害等级：1-低危；2-中危；3-高危；4-严重
     */
    public $Level;

    /**
     * @var integer 基线id
     */
    public $CategoryId;

    /**
     * @var string 最后检测时间
     */
    public $LastScanTime;

    /**
     * @var integer 基线风险项
     */
    public $BaselineFailCount;

    /**
     * @var string 主机uuid
     */
    public $Uuid;

    /**
     * @param string $Name 基线名
     * @param integer $Level 危害等级：1-低危；2-中危；3-高危；4-严重
     * @param integer $CategoryId 基线id
     * @param string $LastScanTime 最后检测时间
     * @param integer $BaselineFailCount 基线风险项
     * @param string $Uuid 主机uuid
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }

        if (array_key_exists("CategoryId",$param) and $param["CategoryId"] !== null) {
            $this->CategoryId = $param["CategoryId"];
        }

        if (array_key_exists("LastScanTime",$param) and $param["LastScanTime"] !== null) {
            $this->LastScanTime = $param["LastScanTime"];
        }

        if (array_key_exists("BaselineFailCount",$param) and $param["BaselineFailCount"] !== null) {
            $this->BaselineFailCount = $param["BaselineFailCount"];
        }

        if (array_key_exists("Uuid",$param) and $param["Uuid"] !== null) {
            $this->Uuid = $param["Uuid"];
        }
    }
}
