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
namespace TencentCloud\Gs\V20191118\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 安卓应用
 *
 * @method string getAndroidAppId() 获取安卓应用 Id
 * @method void setAndroidAppId(string $AndroidAppId) 设置安卓应用 Id
 * @method string getName() 获取安卓应用名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置安卓应用名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getState() 获取安卓应用状态（上架、下架）
 * @method void setState(string $State) 设置安卓应用状态（上架、下架）
 * @method array getAndroidAppVersionInfo() 获取安卓应用版本列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAndroidAppVersionInfo(array $AndroidAppVersionInfo) 设置安卓应用版本列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取安卓应用创建时间
 * @method void setCreateTime(string $CreateTime) 设置安卓应用创建时间
 */
class AndroidApp extends AbstractModel
{
    /**
     * @var string 安卓应用 Id
     */
    public $AndroidAppId;

    /**
     * @var string 安卓应用名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var string 安卓应用状态（上架、下架）
     */
    public $State;

    /**
     * @var array 安卓应用版本列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AndroidAppVersionInfo;

    /**
     * @var string 安卓应用创建时间
     */
    public $CreateTime;

    /**
     * @param string $AndroidAppId 安卓应用 Id
     * @param string $Name 安卓应用名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $State 安卓应用状态（上架、下架）
     * @param array $AndroidAppVersionInfo 安卓应用版本列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime 安卓应用创建时间
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
        if (array_key_exists("AndroidAppId",$param) and $param["AndroidAppId"] !== null) {
            $this->AndroidAppId = $param["AndroidAppId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }

        if (array_key_exists("AndroidAppVersionInfo",$param) and $param["AndroidAppVersionInfo"] !== null) {
            $this->AndroidAppVersionInfo = [];
            foreach ($param["AndroidAppVersionInfo"] as $key => $value){
                $obj = new AndroidAppVersionInfo();
                $obj->deserialize($value);
                array_push($this->AndroidAppVersionInfo, $obj);
            }
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }
    }
}
