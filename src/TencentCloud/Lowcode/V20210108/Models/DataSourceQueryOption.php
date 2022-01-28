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
namespace TencentCloud\Lowcode\V20210108\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 数据源模糊查询参数
 *
 * @method string getLikeName() 获取数据源标识模糊匹配
 * @method void setLikeName(string $LikeName) 设置数据源标识模糊匹配
 * @method string getLikeTitle() 获取数据源名称模糊匹配
 * @method void setLikeTitle(string $LikeTitle) 设置数据源名称模糊匹配
 */
class DataSourceQueryOption extends AbstractModel
{
    /**
     * @var string 数据源标识模糊匹配
     */
    public $LikeName;

    /**
     * @var string 数据源名称模糊匹配
     */
    public $LikeTitle;

    /**
     * @param string $LikeName 数据源标识模糊匹配
     * @param string $LikeTitle 数据源名称模糊匹配
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
        if (array_key_exists("LikeName",$param) and $param["LikeName"] !== null) {
            $this->LikeName = $param["LikeName"];
        }

        if (array_key_exists("LikeTitle",$param) and $param["LikeTitle"] !== null) {
            $this->LikeTitle = $param["LikeTitle"];
        }
    }
}
