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
namespace TencentCloud\Organization\V20210331\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 共享单元部门
 *
 * @method integer getShareNodeId() 获取<p>共享部门ID。</p>
 * @method void setShareNodeId(integer $ShareNodeId) 设置<p>共享部门ID。</p>
 * @method string getCreateTime() 获取<p>创建时间。</p>
 * @method void setCreateTime(string $CreateTime) 设置<p>创建时间。</p>
 */
class ShareUnitNode extends AbstractModel
{
    /**
     * @var integer <p>共享部门ID。</p>
     */
    public $ShareNodeId;

    /**
     * @var string <p>创建时间。</p>
     */
    public $CreateTime;

    /**
     * @param integer $ShareNodeId <p>共享部门ID。</p>
     * @param string $CreateTime <p>创建时间。</p>
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
        if (array_key_exists("ShareNodeId",$param) and $param["ShareNodeId"] !== null) {
            $this->ShareNodeId = $param["ShareNodeId"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }
    }
}
