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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * StopVulScanTask请求参数结构体
 *
 * @method integer getId() 获取<p>任务id</p>
 * @method void setId(integer $Id) 设置<p>任务id</p>
 * @method array getMemberId() 获取<p>集团账号的成员id</p>
 * @method void setMemberId(array $MemberId) 设置<p>集团账号的成员id</p>
 * @method array getAssetList() 获取<p>停止扫描的资产instance_id</p>
 * @method void setAssetList(array $AssetList) 设置<p>停止扫描的资产instance_id</p>
 */
class StopVulScanTaskRequest extends AbstractModel
{
    /**
     * @var integer <p>任务id</p>
     */
    public $Id;

    /**
     * @var array <p>集团账号的成员id</p>
     */
    public $MemberId;

    /**
     * @var array <p>停止扫描的资产instance_id</p>
     */
    public $AssetList;

    /**
     * @param integer $Id <p>任务id</p>
     * @param array $MemberId <p>集团账号的成员id</p>
     * @param array $AssetList <p>停止扫描的资产instance_id</p>
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }

        if (array_key_exists("AssetList",$param) and $param["AssetList"] !== null) {
            $this->AssetList = $param["AssetList"];
        }
    }
}
