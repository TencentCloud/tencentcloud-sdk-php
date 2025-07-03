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
 * SetAndroidInstancesFGAppKeepAlive请求参数结构体
 *
 * @method array getAndroidInstanceIds() 获取安卓实例 ID 列表（最大100条数据）
 * @method void setAndroidInstanceIds(array $AndroidInstanceIds) 设置安卓实例 ID 列表（最大100条数据）
 * @method string getOperation() 获取操作类型，取值：ENABLE 开启保活、DISABLE 关闭保活。当关闭保活时，PackageName 参数传空即可
 * @method void setOperation(string $Operation) 设置操作类型，取值：ENABLE 开启保活、DISABLE 关闭保活。当关闭保活时，PackageName 参数传空即可
 * @method string getPackageName() 获取应用包名，开启保活时，必须传入 PackageName
 * @method void setPackageName(string $PackageName) 设置应用包名，开启保活时，必须传入 PackageName
 */
class SetAndroidInstancesFGAppKeepAliveRequest extends AbstractModel
{
    /**
     * @var array 安卓实例 ID 列表（最大100条数据）
     */
    public $AndroidInstanceIds;

    /**
     * @var string 操作类型，取值：ENABLE 开启保活、DISABLE 关闭保活。当关闭保活时，PackageName 参数传空即可
     */
    public $Operation;

    /**
     * @var string 应用包名，开启保活时，必须传入 PackageName
     */
    public $PackageName;

    /**
     * @param array $AndroidInstanceIds 安卓实例 ID 列表（最大100条数据）
     * @param string $Operation 操作类型，取值：ENABLE 开启保活、DISABLE 关闭保活。当关闭保活时，PackageName 参数传空即可
     * @param string $PackageName 应用包名，开启保活时，必须传入 PackageName
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
        if (array_key_exists("AndroidInstanceIds",$param) and $param["AndroidInstanceIds"] !== null) {
            $this->AndroidInstanceIds = $param["AndroidInstanceIds"];
        }

        if (array_key_exists("Operation",$param) and $param["Operation"] !== null) {
            $this->Operation = $param["Operation"];
        }

        if (array_key_exists("PackageName",$param) and $param["PackageName"] !== null) {
            $this->PackageName = $param["PackageName"];
        }
    }
}
