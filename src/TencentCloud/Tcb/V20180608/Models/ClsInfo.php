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
namespace TencentCloud\Tcb\V20180608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * cls日志信息
 *
 * @method string getClsRegion() 获取cls所属地域
 * @method void setClsRegion(string $ClsRegion) 设置cls所属地域
 * @method string getClsLogsetId() 获取cls日志集ID
 * @method void setClsLogsetId(string $ClsLogsetId) 设置cls日志集ID
 * @method string getClsTopicId() 获取cls日志主题ID
 * @method void setClsTopicId(string $ClsTopicId) 设置cls日志主题ID
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 */
class ClsInfo extends AbstractModel
{
    /**
     * @var string cls所属地域
     */
    public $ClsRegion;

    /**
     * @var string cls日志集ID
     */
    public $ClsLogsetId;

    /**
     * @var string cls日志主题ID
     */
    public $ClsTopicId;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @param string $ClsRegion cls所属地域
     * @param string $ClsLogsetId cls日志集ID
     * @param string $ClsTopicId cls日志主题ID
     * @param string $CreateTime 创建时间
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
        if (array_key_exists("ClsRegion",$param) and $param["ClsRegion"] !== null) {
            $this->ClsRegion = $param["ClsRegion"];
        }

        if (array_key_exists("ClsLogsetId",$param) and $param["ClsLogsetId"] !== null) {
            $this->ClsLogsetId = $param["ClsLogsetId"];
        }

        if (array_key_exists("ClsTopicId",$param) and $param["ClsTopicId"] !== null) {
            $this->ClsTopicId = $param["ClsTopicId"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }
    }
}
