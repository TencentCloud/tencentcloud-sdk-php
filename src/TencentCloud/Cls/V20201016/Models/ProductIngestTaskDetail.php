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
 * 产品接入任务详情
 *
 * @method string getTaskId() 获取<p>接入任务id</p>
 * @method void setTaskId(string $TaskId) 设置<p>接入任务id</p>
 * @method ProductIngestTaskItem getProductIngestTaskItem() 获取<p>接入任务信息</p>
 * @method void setProductIngestTaskItem(ProductIngestTaskItem $ProductIngestTaskItem) 设置<p>接入任务信息</p>
 * @method integer getSelectionMode() 获取<p>接入实例选择方式</p><p>枚举值：</p><ul><li>0： 全部实例</li><li>1： 按标签筛选</li><li>2： 手动选择</li></ul>
 * @method void setSelectionMode(integer $SelectionMode) 设置<p>接入实例选择方式</p><p>枚举值：</p><ul><li>0： 全部实例</li><li>1： 按标签筛选</li><li>2： 手动选择</li></ul>
 * @method array getInstanceIds() 获取<p>所选实例id列表</p>
 * @method void setInstanceIds(array $InstanceIds) 设置<p>所选实例id列表</p>
 * @method array getTags() 获取<p>所选接入实例所处范围标签</p>
 * @method void setTags(array $Tags) 设置<p>所选接入实例所处范围标签</p>
 * @method EBPFCollectRule getEBPFCollectRule() 获取<p>eBPF 采集规则</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEBPFCollectRule(EBPFCollectRule $EBPFCollectRule) 设置<p>eBPF 采集规则</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class ProductIngestTaskDetail extends AbstractModel
{
    /**
     * @var string <p>接入任务id</p>
     */
    public $TaskId;

    /**
     * @var ProductIngestTaskItem <p>接入任务信息</p>
     */
    public $ProductIngestTaskItem;

    /**
     * @var integer <p>接入实例选择方式</p><p>枚举值：</p><ul><li>0： 全部实例</li><li>1： 按标签筛选</li><li>2： 手动选择</li></ul>
     */
    public $SelectionMode;

    /**
     * @var array <p>所选实例id列表</p>
     */
    public $InstanceIds;

    /**
     * @var array <p>所选接入实例所处范围标签</p>
     */
    public $Tags;

    /**
     * @var EBPFCollectRule <p>eBPF 采集规则</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EBPFCollectRule;

    /**
     * @param string $TaskId <p>接入任务id</p>
     * @param ProductIngestTaskItem $ProductIngestTaskItem <p>接入任务信息</p>
     * @param integer $SelectionMode <p>接入实例选择方式</p><p>枚举值：</p><ul><li>0： 全部实例</li><li>1： 按标签筛选</li><li>2： 手动选择</li></ul>
     * @param array $InstanceIds <p>所选实例id列表</p>
     * @param array $Tags <p>所选接入实例所处范围标签</p>
     * @param EBPFCollectRule $EBPFCollectRule <p>eBPF 采集规则</p>
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("ProductIngestTaskItem",$param) and $param["ProductIngestTaskItem"] !== null) {
            $this->ProductIngestTaskItem = new ProductIngestTaskItem();
            $this->ProductIngestTaskItem->deserialize($param["ProductIngestTaskItem"]);
        }

        if (array_key_exists("SelectionMode",$param) and $param["SelectionMode"] !== null) {
            $this->SelectionMode = $param["SelectionMode"];
        }

        if (array_key_exists("InstanceIds",$param) and $param["InstanceIds"] !== null) {
            $this->InstanceIds = $param["InstanceIds"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("EBPFCollectRule",$param) and $param["EBPFCollectRule"] !== null) {
            $this->EBPFCollectRule = new EBPFCollectRule();
            $this->EBPFCollectRule->deserialize($param["EBPFCollectRule"]);
        }
    }
}
