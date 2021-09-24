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
namespace TencentCloud\Tcaplusdb\V20190823\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ckafka地址信息
 *
 * @method string getAddress() 获取kafaka address
 * @method void setAddress(string $Address) 设置kafaka address
 * @method string getTopic() 获取kafaka topic
 * @method void setTopic(string $Topic) 设置kafaka topic
 * @method string getUser() 获取kafka username
 * @method void setUser(string $User) 设置kafka username
 * @method string getPassword() 获取kafka password
 * @method void setPassword(string $Password) 设置kafka password
 * @method string getInstance() 获取ckafka实例
 * @method void setInstance(string $Instance) 设置ckafka实例
 * @method integer getIsVpc() 获取是否走VPC
 * @method void setIsVpc(integer $IsVpc) 设置是否走VPC
 */
class KafkaInfo extends AbstractModel
{
    /**
     * @var string kafaka address
     */
    public $Address;

    /**
     * @var string kafaka topic
     */
    public $Topic;

    /**
     * @var string kafka username
     */
    public $User;

    /**
     * @var string kafka password
     */
    public $Password;

    /**
     * @var string ckafka实例
     */
    public $Instance;

    /**
     * @var integer 是否走VPC
     */
    public $IsVpc;

    /**
     * @param string $Address kafaka address
     * @param string $Topic kafaka topic
     * @param string $User kafka username
     * @param string $Password kafka password
     * @param string $Instance ckafka实例
     * @param integer $IsVpc 是否走VPC
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
        if (array_key_exists("Address",$param) and $param["Address"] !== null) {
            $this->Address = $param["Address"];
        }

        if (array_key_exists("Topic",$param) and $param["Topic"] !== null) {
            $this->Topic = $param["Topic"];
        }

        if (array_key_exists("User",$param) and $param["User"] !== null) {
            $this->User = $param["User"];
        }

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }

        if (array_key_exists("Instance",$param) and $param["Instance"] !== null) {
            $this->Instance = $param["Instance"];
        }

        if (array_key_exists("IsVpc",$param) and $param["IsVpc"] !== null) {
            $this->IsVpc = $param["IsVpc"];
        }
    }
}
