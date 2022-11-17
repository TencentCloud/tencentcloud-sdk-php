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
namespace TencentCloud\Tdid\V20210519\Models;
use TencentCloud\Common\AbstractModel;

/**
 * did详情
 *
 * @method string getAccountIdentifier() 获取账户标识符
 * @method void setAccountIdentifier(string $AccountIdentifier) 设置账户标识符
 * @method string getChainID() 获取链ID
 * @method void setChainID(string $ChainID) 设置链ID
 * @method string getDid() 获取完整tdid
 * @method void setDid(string $Did) 设置完整tdid
 * @method integer getGroupId() 获取群组ID
 * @method void setGroupId(integer $GroupId) 设置群组ID
 * @method string getGroupName() 获取群组名称
 * @method void setGroupName(string $GroupName) 设置群组名称
 */
class Identity extends AbstractModel
{
    /**
     * @var string 账户标识符
     */
    public $AccountIdentifier;

    /**
     * @var string 链ID
     */
    public $ChainID;

    /**
     * @var string 完整tdid
     */
    public $Did;

    /**
     * @var integer 群组ID
     */
    public $GroupId;

    /**
     * @var string 群组名称
     */
    public $GroupName;

    /**
     * @param string $AccountIdentifier 账户标识符
     * @param string $ChainID 链ID
     * @param string $Did 完整tdid
     * @param integer $GroupId 群组ID
     * @param string $GroupName 群组名称
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
        if (array_key_exists("AccountIdentifier",$param) and $param["AccountIdentifier"] !== null) {
            $this->AccountIdentifier = $param["AccountIdentifier"];
        }

        if (array_key_exists("ChainID",$param) and $param["ChainID"] !== null) {
            $this->ChainID = $param["ChainID"];
        }

        if (array_key_exists("Did",$param) and $param["Did"] !== null) {
            $this->Did = $param["Did"];
        }

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("GroupName",$param) and $param["GroupName"] !== null) {
            $this->GroupName = $param["GroupName"];
        }
    }
}
