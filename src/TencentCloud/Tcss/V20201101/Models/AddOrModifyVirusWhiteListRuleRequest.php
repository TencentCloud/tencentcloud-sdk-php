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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AddOrModifyVirusWhiteListRule请求参数结构体
 *
 * @method array getMd5List() 获取<p>MD5列表</p>
 * @method void setMd5List(array $Md5List) 设置<p>MD5列表</p>
 * @method integer getScope() 获取<p>生效范围：1=全部镜像，0=自选镜像</p>
 * @method void setScope(integer $Scope) 设置<p>生效范围：1=全部镜像，0=自选镜像</p>
 * @method integer getId() 获取<p>规则ID，有值为修改，无值为新增</p>
 * @method void setId(integer $Id) 设置<p>规则ID，有值为修改，无值为新增</p>
 * @method array getImageIds() 获取<p>镜像ID列表，最大1000个。Scope为0（自选镜像）时必填</p>
 * @method void setImageIds(array $ImageIds) 设置<p>镜像ID列表，最大1000个。Scope为0（自选镜像）时必填</p>
 * @method string getRemark() 获取<p>规则备注，最大256字符</p>
 * @method void setRemark(string $Remark) 设置<p>规则备注，最大256字符</p>
 * @method integer getEventId() 获取<p>事件id</p>
 * @method void setEventId(integer $EventId) 设置<p>事件id</p>
 */
class AddOrModifyVirusWhiteListRuleRequest extends AbstractModel
{
    /**
     * @var array <p>MD5列表</p>
     */
    public $Md5List;

    /**
     * @var integer <p>生效范围：1=全部镜像，0=自选镜像</p>
     */
    public $Scope;

    /**
     * @var integer <p>规则ID，有值为修改，无值为新增</p>
     */
    public $Id;

    /**
     * @var array <p>镜像ID列表，最大1000个。Scope为0（自选镜像）时必填</p>
     */
    public $ImageIds;

    /**
     * @var string <p>规则备注，最大256字符</p>
     */
    public $Remark;

    /**
     * @var integer <p>事件id</p>
     */
    public $EventId;

    /**
     * @param array $Md5List <p>MD5列表</p>
     * @param integer $Scope <p>生效范围：1=全部镜像，0=自选镜像</p>
     * @param integer $Id <p>规则ID，有值为修改，无值为新增</p>
     * @param array $ImageIds <p>镜像ID列表，最大1000个。Scope为0（自选镜像）时必填</p>
     * @param string $Remark <p>规则备注，最大256字符</p>
     * @param integer $EventId <p>事件id</p>
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
        if (array_key_exists("Md5List",$param) and $param["Md5List"] !== null) {
            $this->Md5List = $param["Md5List"];
        }

        if (array_key_exists("Scope",$param) and $param["Scope"] !== null) {
            $this->Scope = $param["Scope"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("ImageIds",$param) and $param["ImageIds"] !== null) {
            $this->ImageIds = $param["ImageIds"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("EventId",$param) and $param["EventId"] !== null) {
            $this->EventId = $param["EventId"];
        }
    }
}
