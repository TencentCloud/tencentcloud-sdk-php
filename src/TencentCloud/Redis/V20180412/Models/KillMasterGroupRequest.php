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
namespace TencentCloud\Redis\V20180412\Models;
use TencentCloud\Common\AbstractModel;

/**
 * KillMasterGroup请求参数结构体
 *
 * @method string getInstanceId() 获取实例ID
 * @method void setInstanceId(string $InstanceId) 设置实例ID
 * @method string getPassword() 获取1.长度8-30位,推荐使用12位以上的密码
2.不能以"/"开头
3.至少包含两项
    a.小写字母a-z
    b.大写字母A-Z
    c.数字0-9
    d.()`~!@#$%^&*-+=_|{}[]:;<>,.?/
 * @method void setPassword(string $Password) 设置1.长度8-30位,推荐使用12位以上的密码
2.不能以"/"开头
3.至少包含两项
    a.小写字母a-z
    b.大写字母A-Z
    c.数字0-9
    d.()`~!@#$%^&*-+=_|{}[]:;<>,.?/
 * @method array getShardIds() 获取单AZ实例节点信息
 * @method void setShardIds(array $ShardIds) 设置单AZ实例节点信息
 */
class KillMasterGroupRequest extends AbstractModel
{
    /**
     * @var string 实例ID
     */
    public $InstanceId;

    /**
     * @var string 1.长度8-30位,推荐使用12位以上的密码
2.不能以"/"开头
3.至少包含两项
    a.小写字母a-z
    b.大写字母A-Z
    c.数字0-9
    d.()`~!@#$%^&*-+=_|{}[]:;<>,.?/
     */
    public $Password;

    /**
     * @var array 单AZ实例节点信息
     */
    public $ShardIds;

    /**
     * @param string $InstanceId 实例ID
     * @param string $Password 1.长度8-30位,推荐使用12位以上的密码
2.不能以"/"开头
3.至少包含两项
    a.小写字母a-z
    b.大写字母A-Z
    c.数字0-9
    d.()`~!@#$%^&*-+=_|{}[]:;<>,.?/
     * @param array $ShardIds 单AZ实例节点信息
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }

        if (array_key_exists("ShardIds",$param) and $param["ShardIds"] !== null) {
            $this->ShardIds = $param["ShardIds"];
        }
    }
}
