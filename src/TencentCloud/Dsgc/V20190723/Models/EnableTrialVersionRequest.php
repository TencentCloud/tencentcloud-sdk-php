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
namespace TencentCloud\Dsgc\V20190723\Models;
use TencentCloud\Common\AbstractModel;

/**
 * EnableTrialVersion请求参数结构体
 *
 * @method string getDspaId() 获取DSPA实例ID。
 * @method void setDspaId(string $DspaId) 设置DSPA实例ID。
 * @method string getTrialVersion() 获取体验版本名称。
 * @method void setTrialVersion(string $TrialVersion) 设置体验版本名称。
 */
class EnableTrialVersionRequest extends AbstractModel
{
    /**
     * @var string DSPA实例ID。
     */
    public $DspaId;

    /**
     * @var string 体验版本名称。
     */
    public $TrialVersion;

    /**
     * @param string $DspaId DSPA实例ID。
     * @param string $TrialVersion 体验版本名称。
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
        if (array_key_exists("DspaId",$param) and $param["DspaId"] !== null) {
            $this->DspaId = $param["DspaId"];
        }

        if (array_key_exists("TrialVersion",$param) and $param["TrialVersion"] !== null) {
            $this->TrialVersion = $param["TrialVersion"];
        }
    }
}
