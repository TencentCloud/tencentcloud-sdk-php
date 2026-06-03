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
namespace TencentCloud\Ckafka\V20190819\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 用户实体
 *
 * @method integer getUserId() 获取<p>用户id</p>
 * @method void setUserId(integer $UserId) 设置<p>用户id</p>
 * @method string getName() 获取<p>用户名称</p>
 * @method void setName(string $Name) 设置<p>用户名称</p>
 * @method string getCreateTime() 获取<p>创建时间</p>
 * @method void setCreateTime(string $CreateTime) 设置<p>创建时间</p>
 * @method string getUpdateTime() 获取<p>最后更新时间</p>
 * @method void setUpdateTime(string $UpdateTime) 设置<p>最后更新时间</p>
 */
class User extends AbstractModel
{
    /**
     * @var integer <p>用户id</p>
     */
    public $UserId;

    /**
     * @var string <p>用户名称</p>
     */
    public $Name;

    /**
     * @var string <p>创建时间</p>
     */
    public $CreateTime;

    /**
     * @var string <p>最后更新时间</p>
     */
    public $UpdateTime;

    /**
     * @param integer $UserId <p>用户id</p>
     * @param string $Name <p>用户名称</p>
     * @param string $CreateTime <p>创建时间</p>
     * @param string $UpdateTime <p>最后更新时间</p>
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
        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
