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
namespace TencentCloud\Tcr\V20190924\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 修改同步规则参数，用于 ModifyReplication 接口更新已有的实例同步规则配置。
 *
 * @method string getDestNamespace() 获取<p>目标命名空间</p>
 * @method void setDestNamespace(string $DestNamespace) 设置<p>目标命名空间</p>
 * @method boolean getOverride() 获取<p>是否覆盖</p>
 * @method void setOverride(boolean $Override) 设置<p>是否覆盖</p>
 * @method boolean getDeletion() 获取<p>是否同步删除事件</p>
 * @method void setDeletion(boolean $Deletion) 设置<p>是否同步删除事件</p>
 * @method array getFilters() 获取<p>过滤同步条件</p>
 * @method void setFilters(array $Filters) 设置<p>过滤同步条件</p>
 * @method boolean getEnabled() 获取<p>是否开启规则</p>
 * @method void setEnabled(boolean $Enabled) 设置<p>是否开启规则</p>
 */
class ModifyReplicationRule extends AbstractModel
{
    /**
     * @var string <p>目标命名空间</p>
     */
    public $DestNamespace;

    /**
     * @var boolean <p>是否覆盖</p>
     */
    public $Override;

    /**
     * @var boolean <p>是否同步删除事件</p>
     */
    public $Deletion;

    /**
     * @var array <p>过滤同步条件</p>
     */
    public $Filters;

    /**
     * @var boolean <p>是否开启规则</p>
     */
    public $Enabled;

    /**
     * @param string $DestNamespace <p>目标命名空间</p>
     * @param boolean $Override <p>是否覆盖</p>
     * @param boolean $Deletion <p>是否同步删除事件</p>
     * @param array $Filters <p>过滤同步条件</p>
     * @param boolean $Enabled <p>是否开启规则</p>
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
        if (array_key_exists("DestNamespace",$param) and $param["DestNamespace"] !== null) {
            $this->DestNamespace = $param["DestNamespace"];
        }

        if (array_key_exists("Override",$param) and $param["Override"] !== null) {
            $this->Override = $param["Override"];
        }

        if (array_key_exists("Deletion",$param) and $param["Deletion"] !== null) {
            $this->Deletion = $param["Deletion"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new ReplicationFilter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("Enabled",$param) and $param["Enabled"] !== null) {
            $this->Enabled = $param["Enabled"];
        }
    }
}
