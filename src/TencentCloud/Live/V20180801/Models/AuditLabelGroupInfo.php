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
namespace TencentCloud\Live\V20180801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 直播审核标签组信息。
 *
 * @method string getGroupName() 获取<p>标签组中文名。</p>
 * @method void setGroupName(string $GroupName) 设置<p>标签组中文名。</p>
 * @method string getGroupEname() 获取<p>标签组英文名。</p>
 * @method void setGroupEname(string $GroupEname) 设置<p>标签组英文名。</p>
 * @method string getGroupMsg() 获取<p>标签组描述。</p>
 * @method void setGroupMsg(string $GroupMsg) 设置<p>标签组描述。</p>
 */
class AuditLabelGroupInfo extends AbstractModel
{
    /**
     * @var string <p>标签组中文名。</p>
     */
    public $GroupName;

    /**
     * @var string <p>标签组英文名。</p>
     */
    public $GroupEname;

    /**
     * @var string <p>标签组描述。</p>
     */
    public $GroupMsg;

    /**
     * @param string $GroupName <p>标签组中文名。</p>
     * @param string $GroupEname <p>标签组英文名。</p>
     * @param string $GroupMsg <p>标签组描述。</p>
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
        if (array_key_exists("GroupName",$param) and $param["GroupName"] !== null) {
            $this->GroupName = $param["GroupName"];
        }

        if (array_key_exists("GroupEname",$param) and $param["GroupEname"] !== null) {
            $this->GroupEname = $param["GroupEname"];
        }

        if (array_key_exists("GroupMsg",$param) and $param["GroupMsg"] !== null) {
            $this->GroupMsg = $param["GroupMsg"];
        }
    }
}
