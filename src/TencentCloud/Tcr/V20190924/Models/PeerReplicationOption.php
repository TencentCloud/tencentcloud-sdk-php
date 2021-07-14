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
namespace TencentCloud\Tcr\V20190924\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 跨主账号实例同步参数
 *
 * @method string getPeerRegistryUin() 获取待同步实例的uin
 * @method void setPeerRegistryUin(string $PeerRegistryUin) 设置待同步实例的uin
 * @method string getPeerRegistryToken() 获取待同步实例的访问永久Token
 * @method void setPeerRegistryToken(string $PeerRegistryToken) 设置待同步实例的访问永久Token
 * @method boolean getEnablePeerReplication() 获取是否开启跨主账号实例同步
 * @method void setEnablePeerReplication(boolean $EnablePeerReplication) 设置是否开启跨主账号实例同步
 */
class PeerReplicationOption extends AbstractModel
{
    /**
     * @var string 待同步实例的uin
     */
    public $PeerRegistryUin;

    /**
     * @var string 待同步实例的访问永久Token
     */
    public $PeerRegistryToken;

    /**
     * @var boolean 是否开启跨主账号实例同步
     */
    public $EnablePeerReplication;

    /**
     * @param string $PeerRegistryUin 待同步实例的uin
     * @param string $PeerRegistryToken 待同步实例的访问永久Token
     * @param boolean $EnablePeerReplication 是否开启跨主账号实例同步
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
        if (array_key_exists("PeerRegistryUin",$param) and $param["PeerRegistryUin"] !== null) {
            $this->PeerRegistryUin = $param["PeerRegistryUin"];
        }

        if (array_key_exists("PeerRegistryToken",$param) and $param["PeerRegistryToken"] !== null) {
            $this->PeerRegistryToken = $param["PeerRegistryToken"];
        }

        if (array_key_exists("EnablePeerReplication",$param) and $param["EnablePeerReplication"] !== null) {
            $this->EnablePeerReplication = $param["EnablePeerReplication"];
        }
    }
}
