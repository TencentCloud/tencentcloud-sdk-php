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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyResourceGraphProductIngestTask请求参数结构体
 *
 * @method string getResourceGraphId() 获取<p>资源图谱id</p>
 * @method void setResourceGraphId(string $ResourceGraphId) 设置<p>资源图谱id</p>
 * @method string getTaskId() 获取<p>待修改的任务id</p>
 * @method void setTaskId(string $TaskId) 设置<p>待修改的任务id</p>
 * @method integer getSelectionMode() 获取<p>实例选择方案</p><p>枚举值：</p><ul><li>0： 所有示例</li><li>1： 按标签选择</li><li>2： 手动选择</li></ul>
 * @method void setSelectionMode(integer $SelectionMode) 设置<p>实例选择方案</p><p>枚举值：</p><ul><li>0： 所有示例</li><li>1： 按标签选择</li><li>2： 手动选择</li></ul>
 * @method array getInstanceIds() 获取<p>实例id。当选择方式使用“指定实例”时，需要填写</p>
 * @method void setInstanceIds(array $InstanceIds) 设置<p>实例id。当选择方式使用“指定实例”时，需要填写</p>
 * @method EBPFCollectRule getEBPFCollectRule() 获取<p>eBPF 采集规则（仅 EBPF 产品）</p>
 * @method void setEBPFCollectRule(EBPFCollectRule $EBPFCollectRule) 设置<p>eBPF 采集规则（仅 EBPF 产品）</p>
 * @method array getTags() 获取<p>标签。当实例选择方案使用“按标签选择”时，需要填写</p>
 * @method void setTags(array $Tags) 设置<p>标签。当实例选择方案使用“按标签选择”时，需要填写</p>
 */
class ModifyResourceGraphProductIngestTaskRequest extends AbstractModel
{
    /**
     * @var string <p>资源图谱id</p>
     */
    public $ResourceGraphId;

    /**
     * @var string <p>待修改的任务id</p>
     */
    public $TaskId;

    /**
     * @var integer <p>实例选择方案</p><p>枚举值：</p><ul><li>0： 所有示例</li><li>1： 按标签选择</li><li>2： 手动选择</li></ul>
     */
    public $SelectionMode;

    /**
     * @var array <p>实例id。当选择方式使用“指定实例”时，需要填写</p>
     */
    public $InstanceIds;

    /**
     * @var EBPFCollectRule <p>eBPF 采集规则（仅 EBPF 产品）</p>
     */
    public $EBPFCollectRule;

    /**
     * @var array <p>标签。当实例选择方案使用“按标签选择”时，需要填写</p>
     */
    public $Tags;

    /**
     * @param string $ResourceGraphId <p>资源图谱id</p>
     * @param string $TaskId <p>待修改的任务id</p>
     * @param integer $SelectionMode <p>实例选择方案</p><p>枚举值：</p><ul><li>0： 所有示例</li><li>1： 按标签选择</li><li>2： 手动选择</li></ul>
     * @param array $InstanceIds <p>实例id。当选择方式使用“指定实例”时，需要填写</p>
     * @param EBPFCollectRule $EBPFCollectRule <p>eBPF 采集规则（仅 EBPF 产品）</p>
     * @param array $Tags <p>标签。当实例选择方案使用“按标签选择”时，需要填写</p>
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
        if (array_key_exists("ResourceGraphId",$param) and $param["ResourceGraphId"] !== null) {
            $this->ResourceGraphId = $param["ResourceGraphId"];
        }

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("SelectionMode",$param) and $param["SelectionMode"] !== null) {
            $this->SelectionMode = $param["SelectionMode"];
        }

        if (array_key_exists("InstanceIds",$param) and $param["InstanceIds"] !== null) {
            $this->InstanceIds = $param["InstanceIds"];
        }

        if (array_key_exists("EBPFCollectRule",$param) and $param["EBPFCollectRule"] !== null) {
            $this->EBPFCollectRule = new EBPFCollectRule();
            $this->EBPFCollectRule->deserialize($param["EBPFCollectRule"]);
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }
    }
}
