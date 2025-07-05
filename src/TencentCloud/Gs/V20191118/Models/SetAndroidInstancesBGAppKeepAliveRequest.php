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
 * SetAndroidInstancesBGAppKeepAlive请求参数结构体
 *
 * @method array getAndroidInstanceIds() 获取安卓实例 ID 列表（最大100条数据）
 * @method void setAndroidInstanceIds(array $AndroidInstanceIds) 设置安卓实例 ID 列表（最大100条数据）
 * @method string getOperation() 获取操作类型，取值：ADD 添加应用到后台保活列表、REMOVE 从后台保活列表中移除应用、SET 全量设置后台保活列表，替换当前列表。
 * @method void setOperation(string $Operation) 设置操作类型，取值：ADD 添加应用到后台保活列表、REMOVE 从后台保活列表中移除应用、SET 全量设置后台保活列表，替换当前列表。
 * @method array getPackageNames() 获取应用包名列表
 * @method void setPackageNames(array $PackageNames) 设置应用包名列表
 */
class SetAndroidInstancesBGAppKeepAliveRequest extends AbstractModel
{
    /**
     * @var array 安卓实例 ID 列表（最大100条数据）
     */
    public $AndroidInstanceIds;

    /**
     * @var string 操作类型，取值：ADD 添加应用到后台保活列表、REMOVE 从后台保活列表中移除应用、SET 全量设置后台保活列表，替换当前列表。
     */
    public $Operation;

    /**
     * @var array 应用包名列表
     */
    public $PackageNames;

    /**
     * @param array $AndroidInstanceIds 安卓实例 ID 列表（最大100条数据）
     * @param string $Operation 操作类型，取值：ADD 添加应用到后台保活列表、REMOVE 从后台保活列表中移除应用、SET 全量设置后台保活列表，替换当前列表。
     * @param array $PackageNames 应用包名列表
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

        if (array_key_exists("PackageNames",$param) and $param["PackageNames"] !== null) {
            $this->PackageNames = $param["PackageNames"];
        }
    }
}
