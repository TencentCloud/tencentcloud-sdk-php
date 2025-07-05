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
namespace TencentCloud\Gs\V20191118\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 安卓实例应用黑名单
 *
 * @method string getAndroidInstanceId() 获取安卓实例 ID
 * @method void setAndroidInstanceId(string $AndroidInstanceId) 设置安卓实例 ID
 * @method array getAppBlacklist() 获取应用黑名单
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAppBlacklist(array $AppBlacklist) 设置应用黑名单
注意：此字段可能返回 null，表示取不到有效值。
 */
class AndroidInstanceAppBlacklist extends AbstractModel
{
    /**
     * @var string 安卓实例 ID
     */
    public $AndroidInstanceId;

    /**
     * @var array 应用黑名单
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AppBlacklist;

    /**
     * @param string $AndroidInstanceId 安卓实例 ID
     * @param array $AppBlacklist 应用黑名单
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("AndroidInstanceId",$param) and $param["AndroidInstanceId"] !== null) {
            $this->AndroidInstanceId = $param["AndroidInstanceId"];
        }

        if (array_key_exists("AppBlacklist",$param) and $param["AppBlacklist"] !== null) {
            $this->AppBlacklist = $param["AppBlacklist"];
        }
    }
}
